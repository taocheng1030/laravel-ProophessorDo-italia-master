<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;
use Prooph\ProophessorDo\Model\Lesson\Command\CreateLesson;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ServiceBus\CommandBus;
use Ramsey\Uuid\Uuid;

class portLessons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:lessons';

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
        $lessons = $this->connectionOldDb
            ->table('rsatlesson')
            ->get();

        foreach ($lessons as $lesson) {
            $lessonType = $this->connectionOldDb
                ->table('lessontype')
                ->where('id', $lesson->lessontypeid)
                ->value('label');

            $newLessonTypeId = $this->connectionNewDb
                ->table('read_lesson_type')
                ->where('label', ucfirst($lessonType))
                ->value('id');

            $oldSubjectLabel = $this->connectionOldDb
                ->table('subject')
                ->where('id', $lesson->subjectid)
                ->value('label');

            $subjectId = $this->connectionNewDb
                ->table('read_subject')
                ->where('name', $oldSubjectLabel)
                ->value('id');

            $unitId = $this->connectionNewDb
                ->table('read_unit')
                ->where('reference_id', $lesson->rsatunitid)
                ->value('id');

            $createdBy = Uuid::uuid4();

            $command = CreateLesson::withData(
                LessonId::generate()->toString(),
                $lesson->id,
                $newLessonTypeId,
                $lesson->sequence,
                $subjectId,
                $unitId,
                $lesson->label,
                $lesson->multilinelabel,
                $lesson->description,
                $lesson->startingpage,
                $lesson->endingpage,
                $lesson->challengepage,
                $lesson->practicepage,
                $lesson->drillpage,
                $createdBy,
                $lesson->active
            );

            $this->commandBus->dispatch($command);
        }
    }
}
