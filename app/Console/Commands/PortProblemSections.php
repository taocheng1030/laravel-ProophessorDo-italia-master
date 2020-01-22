<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\ProophessorDo\Model\ProblemSection\Command\CreateProblemSection;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionId;
use Illuminate\Console\Command;
use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;
use Prooph\ServiceBus\CommandBus;

class PortProblemSections extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:problemSection';

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
    public function __construct(DatabaseManager $databaseManager, CommandBus $commandBus)
    {
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
        $problemSections = $this->connectionOldDb->table('rsatproblemtype')->get();

        foreach ($problemSections as $problemSection) {
            $oldSubjectLabel = $this->connectionOldDb->table('subject')->where('id', $problemSection->subjectid)->value('label');
            $subject = $this->connectionNewDb->table('read_subject')->where('name', $oldSubjectLabel)->value('id');
            $command = CreateProblemSection::withData(
                ProblemSectionId::generate()->toString(),
                $problemSection->label,
                $problemSection->abbreviation,
                $subject
            );
            $this->commandBus->dispatch($command);
        }
    }
}
