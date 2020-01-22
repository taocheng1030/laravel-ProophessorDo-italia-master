<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;
use Prooph\ProophessorDo\Model\Unit\Command\CreateUnit;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\User\User;
use Prooph\ServiceBus\CommandBus;
use Ramsey\Uuid\Uuid;

class portUnits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:units';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * @var Connection
     */
    protected $connectionOldDb;
    /**
     * @var Connection
     */
    protected $connectionNewDb;
    /**
     * @var CommandBus
     */
    protected $commandBus;

    /**
     * Create a new command instance.
     *
     * @param DatabaseManager $databaseManager
     * @param CommandBus $commandBus
     */
    public function __construct(
        DatabaseManager $databaseManager,
        CommandBus $commandBus
    ) {
        parent::__construct();
        $this->connectionOldDb = $databaseManager->connection('old_cc');
        $this->connectionNewDb = $databaseManager->connection();
        $this->commandBus = $commandBus;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $units = $this->connectionOldDb
            ->table('rsatunit')
            ->get();

        $fakeUserId = Uuid::uuid4()->toString();

        foreach ($units as $unit) {

            $oldSubjectLabel = $this->connectionOldDb
                ->table('subject')
                ->where('id', $unit->subjectid)
                ->value('label');

            $subjectId = $this->connectionNewDb
                ->table('read_subject')
                ->where('name', $oldSubjectLabel)
                ->value('id');

            $command = CreateUnit::withData(
                UnitId::generate()->toString(),
                $unit->label,
                $unit->multilinelabel,
                $unit->id,
                $subjectId,
                $fakeUserId
            );

            $this->commandBus->dispatch($command);
        }
    }
}
