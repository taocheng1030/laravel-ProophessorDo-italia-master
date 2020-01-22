<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\ProophessorDo\Model\PassageSubjects\Command\AddPassageSubject;
use App\ProophessorDo\Model\PassageSubjects\PassageSubject;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectActive;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use Illuminate\Console\Command;
use Illuminate\Database\DatabaseManager;
use Prooph\ServiceBus\CommandBus;

class portPassageSubjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:passageSubjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var \Illuminate\Database\Connection
     */
    protected $connectionOldDb;

    /**
     * @var \Illuminate\Database\Connection
     */
    protected $connectionNewDb;

    /**
     * @var CommandBus
     */
    private $commandBus;

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
        $passageSubjects = $this->connectionOldDb
            ->table('rsatpassagetype')
            ->get();

        foreach ($passageSubjects as $passageSubject) {
            $command = AddPassageSubject::withData(
                PassageSubjectId::generate()->toString(),
                $passageSubject->label,
                $passageSubject->abbreviation,
                PassageSubjectActive::fromString($passageSubject->invalid)->toString()
            );
            $this->commandBus->dispatch($command);
        }
    }
}
