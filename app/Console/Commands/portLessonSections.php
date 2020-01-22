<?php

namespace App\Console\Commands;

use App\EventSourcing\Model\LessonSection\Command\CreateLessonSection;
use App\EventSourcing\Model\LessonSection\LessonSectionActive;
use App\EventSourcing\Model\LessonSection\LessonSectionId;
use App\EventSourcing\Model\LessonSection\LessonSectionName;
use App\EventSourcing\Model\LessonSection\LessonSectionReferenceId;
use Illuminate\Console\Command;
use Illuminate\Database\DatabaseManager;
use Prooph\ServiceBus\CommandBus;

class portLessonSections extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:lessonSections';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var \Illuminate\Database\Connection
     */
    private $connectionOldDb;

    /**
     * @var \Illuminate\Database\Connection
     */
    private $connectionNewDb;

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
        $lessonSections = $this->connectionOldDb->table('rsatlessonsectiontype')->get();

        foreach ($lessonSections as $lessonSection) {
            $command = CreateLessonSection::withData(
                LessonSectionId::generate()->toString(),
                LessonSectionReferenceId::withString($lessonSection->id)->toString(),
                LessonSectionName::withString($lessonSection->label)->toString(),
                LessonSectionActive::withString($lessonSection->invalid)->toString()
            );
//            dd($command);
            $this->commandBus->dispatch($command);
        }
    }
}
