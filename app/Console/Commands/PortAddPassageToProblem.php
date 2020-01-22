<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\ProophessorDo\Model\PassageProblem\Command\AddProblemToPassage;
use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use Illuminate\Console\Command;
use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;
use Prooph\ServiceBus\CommandBus;

class PortAddPassageToProblem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:addPassageToProblem';

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
        $problems = $this->connectionOldDb->table('rsatproblem')->get();
        foreach ($problems as $problem) {
            $newProblem = $this->connectionNewDb
                ->table('read_problem')
                ->where('id', $problem->id)
                ->first();
            $newPassage = $this->connectionNewDb->table('read_passage')->where('id', $problem->rsatpassageid)->first();

            if ($newProblem && $newPassage) {
                $command = AddProblemToPassage::withData(
                    PassageProblemId::generate()->toString(),
                    $newPassage->id,
                    $newProblem->id,
                    (string)$problem->sequence
                );
                $this->commandBus->dispatch($command);

            }
        }
    }
}
