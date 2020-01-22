<?php

namespace App\Console\Commands;

use App\ProophessorDo\Model\LessonType\Command\CreateLessonType;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Illuminate\Console\Command;
use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;
use Prooph\ServiceBus\CommandBus;

class portLessonTypes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:lessonTypes';

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
        $lessonTypes = [
            'Module',
            'Reading',
            'Drill',
            'Standard',
            'Worksheet'
        ];
        foreach ($lessonTypes as $lessonType) {
            $command = CreateLessonType::withData(
                LessonTypeId::generate()->toString(),
                $lessonType,
                1
            );
            $this->commandBus->dispatch($command);
        }
    }
}
