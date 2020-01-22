<?php

use App\EventSourcing\Model\LessonProblems\Command\AddProblemToLesson;
use App\EventSourcing\Model\LessonProblems\Handler\AddProblemToLessonHandler;
use App\EventSourcing\Model\LessonSection\Command\CreateLessonSection;
use App\EventSourcing\Model\LessonSection\Handler\CreateLessonSectionHandler;
use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Answer\Command\ChangeAnswerSequence;
use App\ProophessorDo\Model\Answer\Command\ChangeAnswerText;
use App\ProophessorDo\Model\Answer\Command\CreateAnswer;
use App\ProophessorDo\Model\Answer\Command\DeleteAnswer;
use App\ProophessorDo\Model\Answer\Command\MarkAnswerCorrect;
use App\ProophessorDo\Model\Answer\Handler\ChangeAnswerSequenceHandler;
use App\ProophessorDo\Model\Answer\Handler\ChangeAnswerTextHandler;
use App\ProophessorDo\Model\Answer\Handler\CreateAnswerHandler;
use App\ProophessorDo\Model\Answer\Handler\DeleteAnswerHandler;
use App\ProophessorDo\Model\Answer\Handler\MarkAnswerCorrectHandler;
use App\ProophessorDo\Model\Course\Command\AddCourse;
use App\ProophessorDo\Model\Course\Handler\AddCourseHandler;
use App\ProophessorDo\Model\Lesson\Command\UpdateLessonDescription;
use App\ProophessorDo\Model\Lesson\Event\UpdateLessonReferenceId;
use App\ProophessorDo\Model\Lesson\Handler\UpdateLessonDescriptionHandler;
use App\ProophessorDo\Model\Lesson\Handler\UpdateLessonReferenceIdHandler;
use App\ProophessorDo\Model\LessonType\Command\CreateLessonType;
use App\ProophessorDo\Model\LessonType\Handler\CreateLessonTypeHandler;
use App\ProophessorDo\Model\PassageProblem\Command\AddProblemToPassage;
use App\ProophessorDo\Model\PassageProblem\Command\ChangePassageProblemSequence;
use App\ProophessorDo\Model\PassageProblem\Handler\AddProblemToPassageHandler;
use App\ProophessorDo\Model\PassageProblem\Handler\ChangePassageProblemSequenceHandler;
use App\ProophessorDo\Model\Passages\Command\AddPassage;
use App\ProophessorDo\Model\Passages\Command\DeletePassage;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageActivity;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageNote;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageSubject;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageTest;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageText;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageTitle;
use App\ProophessorDo\Model\Passages\Handler\AddPassageHandler;
use App\ProophessorDo\Model\Passages\Handler\DeletePassageHandler;
use App\ProophessorDo\Model\Passages\Handler\UpdatePassageActivityHandler;
use App\ProophessorDo\Model\Passages\Handler\UpdatePassageNoteHandler;
use App\ProophessorDo\Model\Passages\Handler\UpdatePassageSubjectHandler;
use App\ProophessorDo\Model\Passages\Handler\UpdatePassageTestHandler;
use App\ProophessorDo\Model\Passages\Handler\UpdatePassageTextHandler;
use App\ProophessorDo\Model\Passages\Handler\UpdatePassageTitleHandler;
use App\ProophessorDo\Model\PassageSubjects\Command\AddPassageSubject;
use App\ProophessorDo\Model\PassageSubjects\Handler\AddPassageSubjectHandler;
use App\ProophessorDo\Model\PracticeTest\Command\CreatePracticeTest;
use App\ProophessorDo\Model\PracticeTest\Handler\CreatePracticeTestHandler;
use App\ProophessorDo\Model\Problem\Command\UpdateProblemText;
use App\ProophessorDo\Model\Problem\Handler\UpdateProblemTextHandler;
use App\ProophessorDo\Model\ProblemFormat\Command\CreateProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\Handler\CreateProblemFormatHandler;
use App\ProophessorDo\Model\ProblemSection\Command\CreateProblemSection;
use App\ProophessorDo\Model\ProblemSection\Handler\CreateProblemSectionHandler;
use App\ProophessorDo\Model\ProblemStats\Command\CreateProblemStats;
use App\ProophessorDo\Model\ProblemStats\Handler\CreateProblemStatsHandler;
use App\ProophessorDo\Model\Video\Command\CreateVideo;
use App\ProophessorDo\Model\Video\Handler\CreateVideoHandler;
use Prooph\ProophessorDo\Model\Category\Command\CreateCategory;
use Prooph\ProophessorDo\Model\Category\Handler\CreateCategoryHandler;
use Prooph\ProophessorDo\Model\Lesson\Command\CreateLesson;
use Prooph\ProophessorDo\Model\Lesson\Handler\CreateLessonHandler;
use Prooph\ProophessorDo\Model\Problem\Command\AddProblem;
use Prooph\ProophessorDo\Model\Problem\Command\AddVideoToProblem;
use Prooph\ProophessorDo\Model\Problem\Command\DeleteProblem;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemActivity;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemFormat;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemNotes;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSection;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSubjectId;
use Prooph\ProophessorDo\Model\Problem\Handler\AddProblemHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\AddVideoToProblemHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\DeleteProblemHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemActivityHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemDifficultyHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemFormatHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemNotesHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemReferenceNumberHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemSectionHandler;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemSubjectIdHandler;
use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Subject\Handler\CreateSubjectHandler;
use Prooph\ProophessorDo\Model\Unit\Command\CreateUnit;
use Prooph\ProophessorDo\Model\Unit\Handler\CreateUnitHandler;
use Prooph\ProophessorDo\Model\User\Command\RegisterUser;
use Prooph\ProophessorDo\Model\User\Handler\RegisterUserHandler;

return [
    /*
    |--------------------------------------------------------------------------
    | Command Buses
    |
    | Each entry will define a different command bus in the application. It can
    | be retrieved with `ServiceBus::commandBus('index')`. The default bus will
    | be bound to the the CommandBus class and facade.
    |
    | Each command bus can configure:
    | - message_factory: Defaults to FQCNMessageFactory, if not provided.
    | - action_event_emitter: Defaults to ProophActionEventEmitter, if not provided.
    | - plugins: A list of plugins to add to the bus.
    | - router: Configuration for the router plugin of the bus.
    |
    | Router configurations:
    | - type: The service ID or FQCN of the router. Defaults to CommandRouter if
    |         not provided.
    | - async_switch: The service ID or FQCN of the async message producer. Optional
    | - routes: A list of messageName => handler
    |
    |--------------------------------------------------------------------------
    */
    'command_buses' => [
        'default' => [
            'message_factory' => \Prooph\Common\Messaging\FQCNMessageFactory::class,
            'action_event_emitter' => \Prooph\Common\Event\ProophActionEventEmitter::class,
            'plugins'         => [

            ],
            'router' => [
                'type' => \Prooph\ServiceBus\Plugin\Router\CommandRouter::class,
                'routes' => [
                    RegisterUser::class => RegisterUserHandler::class,
                    AddProblem::class => AddProblemHandler::class,
                    AddPassage::class => AddPassageHandler::class,
                    CreateLessonType::class => CreateLessonTypeHandler::class,
                    CreateLesson::class => CreateLessonHandler::class,
                    CreateUnit::class => CreateUnitHandler::class,
                    CreatePracticeTest::class => CreatePracticeTestHandler::class,
                    CreateCategory::class => CreateCategoryHandler::class,
                    CreateSection::class => CreateSection::class,
                    CreateAnswer::class => CreateAnswerHandler::class,
                    CreateSubject::class => CreateSubjectHandler::class,
                    UpdateProblemReferenceNumber::class => UpdateProblemReferenceNumberHandler::class,
                    UpdateProblemActivity::class => UpdateProblemActivityHandler::class,
                    UpdateProblemDifficulty::class => UpdateProblemDifficultyHandler::class,
                    UpdateProblemFormat::class => UpdateProblemFormatHandler::class,
                    UpdateProblemNotes::class => UpdateProblemNotesHandler::class,
                    UpdateProblemSection::class => UpdateProblemSectionHandler::class,
                    UpdateProblemSubjectId::class => UpdateProblemSubjectIdHandler::class,
                    UpdateProblemText::class => UpdateProblemTextHandler::class,
                    AddCourse::class => AddCourseHandler::class,
                    CreateProblemFormat::class => CreateProblemFormatHandler::class,
                    CreateVideo::class => CreateVideoHandler::class,
                    CreateProblemStats::class => CreateProblemStatsHandler::class,
                    AddPassageSubject::class => AddPassageSubjectHandler::class,
                    UpdatePassageText::class => UpdatePassageTextHandler::class,
                    UpdatePassageTitle::class => UpdatePassageTitleHandler::class,
                    UpdatePassageTest::class => UpdatePassageTestHandler::class,
                    UpdatePassageSubject::class => UpdatePassageSubjectHandler::class,
                    UpdatePassageActivity::class => UpdatePassageActivityHandler::class,
                    UpdatePassageNote::class => UpdatePassageNoteHandler::class,
                    DeletePassage::class => DeletePassageHandler::class,
                    ChangePassageProblemSequence::class => ChangePassageProblemSequenceHandler::class,
                    AddProblemToLesson::class => AddProblemToLessonHandler::class,
                    CreateLessonSection::class => CreateLessonSectionHandler::class,
                    AddVideoToProblem::class => AddVideoToProblemHandler::class,
                    DeleteProblem::class => DeleteProblemHandler::class,
                    DeleteAnswer::class => DeleteAnswerHandler::class,
                    MarkAnswerCorrect::class => MarkAnswerCorrectHandler::class,
                    ChangeAnswerText::class => ChangeAnswerTextHandler::class,
                    UpdateLessonDescription::class => UpdateLessonDescriptionHandler::class,
                    AddProblemToPassage::class => AddProblemToPassageHandler::class,
                    CreateProblemSection::class => CreateProblemSectionHandler::class,
                    ChangeAnswerSequence::class => ChangeAnswerSequenceHandler::class,
                    UpdateLessonReferenceId::class => UpdateLessonReferenceIdHandler::class
                ]
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Event Buses
    |
    | Each entry will define a different command bus in the application. It can
    | be retrieved with `ServiceBus::eventBus('index')`. The default bus will
    | be bound to the the EventBus class and facade.
    |
    | Each command bus can configure:
    | - message_factory: Defaults to FQCNMessageFactory, if not provided.
    | - action_event_emitter: Defaults to ProophActionEventEmitter, if not provided.
    | - plugins: A list of plugins to add to the bus.
    | - router: Configuration for the router plugin of the bus.
    |
    | Router configurations:
    | - type: The service ID or FQCN of the router. Defaults to EventRouter if
    |         not provided.
    | - routes: A list of messageName => [ listener1, listener2 ]
    |
    |--------------------------------------------------------------------------
    */
    'event_buses'   => [
        'default' => [
            'message_factory' => \Prooph\Common\Messaging\FQCNMessageFactory::class,
            'action_event_emitter' => \Prooph\Common\Event\ProophActionEventEmitter::class,
            'plugins'         => [
                \Prooph\ServiceBus\Plugin\InvokeStrategy\OnEventStrategy::class
            ],
            'router' => [
                'type' => \Prooph\ServiceBus\Plugin\Router\EventRouter::class,
                'routes' => [

                ]
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Query Buses
    |
    | Each entry will define a different command bus in the application. It can
    | be retrieved with `ServiceBus::queryBus('index')`. The default bus will
    | be bound to the the QueryBus class and facade.
    |
    | Each command bus can configure:
    | - message_factory: Defaults to FQCNMessageFactory, if not provided.
    | - action_event_emitter: Defaults to ProophActionEventEmitter, if not provided.
    | - plugins: A list of plugins to add to the bus.
    | - router: Configuration for the router plugin of the bus.
    |
    | Router configurations:
    | - type: The service ID or FQCN of the router. Defaults to QueryRouter if
    |         not provided.
    | - routes: A list of messageName => handler
    |
    |--------------------------------------------------------------------------
    */
    'query_buses'   => [
        'default' => [
            'message_factory' => \Prooph\Common\Messaging\FQCNMessageFactory::class,
            'action_event_emitter' => \Prooph\Common\Event\ProophActionEventEmitter::class,
            'plugins'         => [

            ],
            'router' => [
                'type' => \Prooph\ServiceBus\Plugin\Router\QueryRouter::class,
                'routes' => [

                ]
            ]
        ],
    ],
];
