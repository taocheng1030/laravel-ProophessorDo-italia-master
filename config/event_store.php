<?php

use App\EventSourcing\Model\LessonProblems\LessonProblem;
use App\EventSourcing\Model\LessonProblems\LessonProblemRepository;
use App\EventSourcing\Model\LessonSection\LessonSection;
use App\EventSourcing\Model\LessonSection\LessonSectionRepository;
use App\ProophessorDo\Infrastructure\Repository\AnswerCollection;
use App\ProophessorDo\Infrastructure\Repository\CategoryCollection;
use App\ProophessorDo\Infrastructure\Repository\CourseCollection;
use App\ProophessorDo\Infrastructure\Repository\LessonCollection;
use App\ProophessorDo\Infrastructure\Repository\LessonProblemCollection;
use App\ProophessorDo\Infrastructure\Repository\LessonSectionCollection;
use App\ProophessorDo\Infrastructure\Repository\LessonTypeCollection;
use App\ProophessorDo\Infrastructure\Repository\PassageCollection;
use App\ProophessorDo\Infrastructure\Repository\PassageProblemCollection;
use App\ProophessorDo\Infrastructure\Repository\PassageSubjectCollection;
use App\ProophessorDo\Infrastructure\Repository\PracticeTestCollection;
use App\ProophessorDo\Infrastructure\Repository\ProblemCategoryCollection;
use App\ProophessorDo\Infrastructure\Repository\ProblemFormatCollection;
use App\ProophessorDo\Infrastructure\Repository\ProblemSectionCollection;
use App\ProophessorDo\Infrastructure\Repository\ProblemStatsCollection;
use App\ProophessorDo\Infrastructure\Repository\SectionCollection;
use App\ProophessorDo\Infrastructure\Repository\SubjectCollection;
use App\ProophessorDo\Infrastructure\Repository\TestCollection;
use App\ProophessorDo\Infrastructure\Repository\UnitCollection;
use App\ProophessorDo\Infrastructure\Repository\VideoCollection;
use App\ProophessorDo\Model\Course\Course;
use App\ProophessorDo\Model\Course\CourseRepository;
use App\ProophessorDo\Model\LessonType\LessonType;
use App\ProophessorDo\Model\LessonType\LessonTypeRepository;
use App\ProophessorDo\Model\PassageProblem\PassageProblem;
use App\ProophessorDo\Model\PassageProblem\PassageProblemRepository;
use App\ProophessorDo\Model\Passages\Passage;
use App\ProophessorDo\Model\Passages\PassageRepository;
use App\ProophessorDo\Model\PassageSubjects\PassageSubject;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectRepository;
use App\ProophessorDo\Model\PracticeTest\PracticeTest;
use App\ProophessorDo\Model\PracticeTest\PracticeTestRepository;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategory;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryRepository;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatRepository;
use App\ProophessorDo\Model\ProblemSection\ProblemSection;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionRepository;
use App\ProophessorDo\Model\ProblemStats\ProblemStats;
use App\ProophessorDo\Model\ProblemStats\ProblemStatsRepository;
use App\ProophessorDo\Model\Section\Section;
use App\ProophessorDo\Model\Section\SectionRepository;
use App\ProophessorDo\Model\Test\TestRepository;
use App\ProophessorDo\Model\Video\Video;
use App\ProophessorDo\Model\Video\VideoRepository;
use App\ProophessorDo\Projection\Answer\AnswerProjector;
use App\ProophessorDo\Projection\Answer\AnswerReadModel;
use App\ProophessorDo\Projection\Category\CategoryProjector;
use App\ProophessorDo\Projection\Category\CategoryReadModel;
use App\ProophessorDo\Projection\Course\CourseProjector;
use App\ProophessorDo\Projection\Course\CourseReadModel;
use App\ProophessorDo\Projection\Lesson\LessonProjector;
use App\ProophessorDo\Projection\Lesson\LessonReadModel;
use App\ProophessorDo\Projection\LessonProblem\LessonProblemProjector;
use App\ProophessorDo\Projection\LessonProblem\LessonProblemReadModel;
use App\ProophessorDo\Projection\LessonSection\LessonSectionProjector;
use App\ProophessorDo\Projection\LessonSection\LessonSectionReadModel;
use App\ProophessorDo\Projection\LessonType\LessonTypeProjector;
use App\ProophessorDo\Projection\LessonType\LessonTypeReadModel;
use App\ProophessorDo\Projection\PassageProblem\PassageProblemProjector;
use App\ProophessorDo\Projection\PassageProblem\PassageProblemReadModel;
use App\ProophessorDo\Projection\Passages\PassageProjector;
use App\ProophessorDo\Projection\Passages\PassageReadModel;
use App\ProophessorDo\Projection\PassageSubject\PassageSubjectProjector;
use App\ProophessorDo\Projection\PassageSubject\PassageSubjectReadModel;
use App\ProophessorDo\Projection\PracticeTest\PracticeTestProjector;
use App\ProophessorDo\Projection\PracticeTest\PracticeTestReadModel;
use App\ProophessorDo\Projection\ProblemCategory\ProblemCategoryProjector;
use App\ProophessorDo\Projection\ProblemCategory\ProblemCategoryReadModel;
use App\ProophessorDo\Projection\ProblemFormat\ProblemFormatProjector;
use App\ProophessorDo\Projection\ProblemFormat\ProblemFormatReadModel;
use App\ProophessorDo\Projection\ProblemSection\ProblemSectionProjection;
use App\ProophessorDo\Projection\ProblemSection\ProblemSectionReadModel;
use App\ProophessorDo\Projection\ProblemStats\ProblemStatsProjector;
use App\ProophessorDo\Projection\ProblemStats\ProblemStatsReadModel;
use App\ProophessorDo\Projection\Section\SectionProjection;
use App\ProophessorDo\Projection\Section\SectionReadModel;
use App\ProophessorDo\Projection\Subject\SubjectProjector;
use App\ProophessorDo\Projection\Subject\SubjectReadModel;
use App\ProophessorDo\Projection\Test\TestProjector;
use App\ProophessorDo\Projection\Test\TestReadModel;
use App\ProophessorDo\Projection\Unit\UnitProjector;
use App\ProophessorDo\Projection\Unit\UnitReadModel;
use App\ProophessorDo\Projection\Video\VideoProjector;
use App\ProophessorDo\Projection\Video\VideoReadModel;
use Prooph\ProophessorDo\Infrastructure\Repository\EventStoreProblemCollection;
use Prooph\ProophessorDo\Infrastructure\Repository\EventStoreUserCollection;
use Prooph\ProophessorDo\Model\Answer\Answer;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;
use Prooph\ProophessorDo\Model\Category\Category;
use Prooph\ProophessorDo\Model\Category\CategoryRepository;
use Prooph\ProophessorDo\Model\Lesson\Lesson;
use Prooph\ProophessorDo\Model\Lesson\LessonRepository;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;
use Prooph\ProophessorDo\Model\Subject\Subject;
use Prooph\ProophessorDo\Model\Subject\SubjectRepository;
use Prooph\ProophessorDo\Model\Unit\Unit;
use Prooph\ProophessorDo\Model\Unit\UnitRepository;
use Prooph\ProophessorDo\Model\User\User;
use Prooph\ProophessorDo\Model\User\UserCollection;
use Prooph\ProophessorDo\Projection\Problem\ProblemProjector;
use Prooph\ProophessorDo\Projection\Problem\ProblemReadModel;
use Prooph\ProophessorDo\Projection\User\UserProjection;
use Prooph\ProophessorDo\Projection\User\UserReadModel;

return [
    /*
    |--------------------------------------------------------------------------
    | Plugins
    |
    | List of all global event store plugin service IDs
    |
    |--------------------------------------------------------------------------
    */
    'plugins' => [],

    /*
    |--------------------------------------------------------------------------
    | Metadata Enrichers
    |
    | List of all global event store metadata enrichers
    |
    |--------------------------------------------------------------------------
    */
    'metadata_enrichers' => [],

    /*
    |--------------------------------------------------------------------------
    | Event Stores
    |--------------------------------------------------------------------------
    |
    | Each event store will be configured here. Currently only the mysql,
    | maria_db and postgres stores are supported. Each store will be bound to
    | event_store.stores.<key> as well as to the EventStore FQCN. Available
    | settings are:
    |
    | - persistence_strategy: The class name or service ID of the persistence strategy
    | - load_batch_size: The number of events a query should return in a single batch. Default is 1000
    | - event_streams_table: The event stream table to use. Default is event_streams
    | - message_factory: The message factory to use. Default is FCQNMessageFactory
    | - disable_transaction_handling: Boolean to turn off transaction handling. Default is false
    | - action_event_emitter: Defaults to ProophEventActionEmitter
    | - wrap_action_event_emitter: Defaults to true
    | - metadata_enrichers: A list of metadata enrichers to add to the store.
    | - plugins: A list of plugins to add to the store.
    |
    */
    'stores' => [
        'default' => 'mysql',
        'mysql' => [
            'persistence_strategy' => \Prooph\EventStore\Pdo\PersistenceStrategy\MySqlSingleStreamStrategy::class,
        ],
        'maria_db' => [
            'persistence_strategy' => \Prooph\EventStore\Pdo\PersistenceStrategy\MariaDbAggregateStreamStrategy::class,
        ],
        'postgres' => [
            'persistence_strategy' => \Prooph\EventStore\Pdo\PersistenceStrategy\PostgresAggregateStreamStrategy::class,
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | Each aggregate repository is configured in this structure. Each key
    | represents a different aggregate repository. Each repository is configured
    | with:
    | - store: The key of the store to use. Valid values are any key in the `stores` array above.
    | - repository_interface: An optional interface to alias the repository with.
    | - repository_class: The FQCN or service ID for the repository class.
    | - aggregate_type: The FQCN for the aggregate this store maintains.
    | - aggregate_translator: The translator for the aggregate. Defaults to \Prooph\EventSourcing\EventStoreIntegration\AggregateTranslator.
    | - stream_name: The stream name.
    | - one_stream_per_aggregate: Set this to true for an aggregate stream strategy. Default is false
    |
    */
    'repositories' => [
        'user_collection' => [
            'store'                => 'default',
            'repository_interface' => UserCollection::class,
            'repository_class'     => EventStoreUserCollection::class,
            'aggregate_type'       => User::class,
        ],
        'problem_collection' => [
            'store' => 'default',
            'repository_interface' => ProblemRepository::class,
            'repository_class' => EventStoreProblemCollection::class,
            'aggregate_type' => Problem::class
        ],
        'problem_category_collection' => [
            'store' => 'default',
            'repository_interface' => ProblemCategoryRepository::class,
            'repository_class' => ProblemCategoryCollection::class,
            'aggregate_type' => ProblemCategory::class
        ],
        'passage_collection' => [
            'store' => 'default',
            'repository_interface' => PassageRepository::class,
            'repository_class' => PassageCollection::class,
            'aggregate_type' => Passage::class
        ],
        'lesson_collection' => [
            'store' => 'default',
            'repository_interface' => LessonRepository::class,
            'repository_class' => LessonCollection::class,
            'aggregate_type' => Lesson::class
        ],
        'unit_collection' => [
            'store' => 'default',
            'repository_interface' => UnitRepository::class,
            'repository_class' => UnitCollection::class,
            'aggregate_type' => Unit::class
        ],
        'practice_test_collection' => [
            'store' => 'default',
            'repository_interface' => PracticeTestRepository::class,
            'repository_class' => PracticeTestCollection::class,
            'aggregate_type' => PracticeTest::class
        ],
        'category_collection' => [
            'store' => 'default',
            'repository_interface' => CategoryRepository::class,
            'repository_class' => CategoryCollection::class,
            'aggregate_type' => Category::class
        ],
        'test_collection' => [
            'store' => 'default',
            'repository_interface' => TestRepository::class,
            'repository_class' => TestCollection::class,
            'aggregate_type' => \App\ProophessorDo\Model\Test\Test::class
        ],
        'subject_collection' => [
            'store' => 'default',
            'repository_interface' => SubjectRepository::class,
            'repository_class' => SubjectCollection::class,
            'aggregate_type' => Subject::class
        ],
        'section_collection' => [
            'store' => 'default',
            'repository_interface' => SectionRepository::class,
            'repository_class' => SectionCollection::class,
            'aggregate_type' => Section::class
        ],
        'answer_collection' => [
            'store' => 'default',
            'repository_interface' => AnswerRepository::class,
            'repository_class' => AnswerCollection::class,
            'aggregate_type' => Answer::class
        ],
        'course_collection' => [
            'store' => 'default',
            'repository_interface' => CourseRepository::class,
            'repository_class' => CourseCollection::class,
            'aggregate_type' => Course::class
        ],
        'problem_format_collection' => [
            'store' => 'default',
            'repository_interface' => ProblemFormatRepository::class,
            'repository_class' => ProblemFormatCollection::class,
            'aggregate_type' => ProblemFormat::class
        ],
        'video_collection' => [
            'store' => 'default',
            'repository_interface' => VideoRepository::class,
            'repository_class' => VideoCollection::class,
            'aggregate_type' => Video::class
        ],
        'problem_stats_collection' => [
            'store' => 'default',
            'repository_interface' => ProblemStatsRepository::class,
            'repository_class' => ProblemStatsCollection::class,
            'aggregate_type' => ProblemStats::class
        ],
        'passage_subject_collection' => [
            'store' => 'default',
            'repository_interface' => PassageSubjectRepository::class,
            'repository_class' => PassageSubjectCollection::class,
            'aggregate_type' => PassageSubject::class
        ],
        'passage_problem_collection' => [
            'store' => 'default',
            'repository_interface' => PassageProblemRepository::class,
            'repository_class' => PassageProblemCollection::class,
            'aggregate_type' => PassageProblem::class
        ],
        'lesson_type_collection' => [
            'store' => 'default',
            'repository_interface' => LessonTypeRepository::class,
            'repository_class' => LessonTypeCollection::class,
            'aggregate_type' => LessonType::class
        ],
        'lesson_problem_collection' => [
            'store' => 'default',
            'repository_interface' => LessonProblemRepository::class,
            'repository_class' => LessonProblemCollection::class,
            'aggregate_type' => LessonProblem::class
        ],
        'lesson_section_collection' => [
            'store' => 'default',
            'repository_interface' => LessonSectionRepository::class,
            'repository_class' => LessonSectionCollection::class,
            'aggregate_type' => LessonSection::class
        ],
        'problem_section_collection' => [
            'store' => 'default',
            'repository_interface' => ProblemSectionRepository::class,
            'repository_class' => ProblemSectionCollection::class,
            'aggregate_type' => ProblemSection::class
        ]
     ],

    /*
    |--------------------------------------------------------------------------
    | Projections
    |--------------------------------------------------------------------------
    |
    | The necessary definitions for creating projections
    | - store: The name of the store. One of mysql, maria_db or postgres
    | - event_streams_table: Defaults to event_streams
    | - projections_table: Defaults to projections
    | - projections
    |   - connection: The name of the connection to use. Defaults to the same connection as the store.
    |   - read_model: The FQCN of the projection read model.
    |   - projection: The FQCN of the projection.
    |
    */
    'projection_managers' => [
        'todo_projection_manager' => [
            'store' => 'default',
            'projections' => [
                'user_projection' => [
                    'read_model' => UserReadModel::class,
                    'projection' => UserProjection::class,
                ],
                'problem_projection' => [
                    'read_model' => ProblemReadModel::class,
                    'projection' => ProblemProjector::class
                ],
                'problem_category_projection' => [
                    'read_model' => ProblemCategoryReadModel::class,
                    'projection' => ProblemCategoryProjector::class
                ],
                'passage_projection' => [
                    'read_model' => PassageReadModel::class,
                    'projection' => PassageProjector::class
                ],
                'lesson_projection' => [
                    'read_model' => LessonReadModel::class,
                    'projection' => LessonProjector::class
                ],
                'unit_projection' => [
                    'read_model' => UnitReadModel::class,
                    'projection' => UnitProjector::class
                ],
                'practice_test_projection' => [
                    'read_model' => PracticeTestReadModel::class,
                    'projection' => PracticeTestProjector::class
                ],
                'category_projection' => [
                    'read_model' => CategoryReadModel::class,
                    'projection' => CategoryProjector::class
                ],
                'test_projection' => [
                    'read_model' => TestReadModel::class,
                    'projection' => TestProjector::class
                ],
                'subject_projection' => [
                    'read_model' => SubjectReadModel::class,
                    'projection' => SubjectProjector::class
                ],
                'section_projection' => [
                    'read_model' => SectionReadModel::class,
                    'projection' => SectionProjection::class
                ],
                'answer_projection' => [
                    'read_model' => AnswerReadModel::class,
                    'projection' => AnswerProjector::class
                ],
                'course_projection' => [
                    'read_model' => CourseReadModel::class,
                    'projection' => CourseProjector::class
                ],
                'problem_format_projection' => [
                    'read_model' => ProblemFormatReadModel::class,
                    'projection' => ProblemFormatProjector::class
                ],
                'video_projection' => [
                    'read_model' => VideoReadModel::class,
                    'projection' => VideoProjector::class
                ],
                'problem_stats_projection' => [
                    'read_model' => ProblemStatsReadModel::class,
                    'projection' => ProblemStatsProjector::class
                ],
                'passage_subject_projection' => [
                    'read_model' => PassageSubjectReadModel::class,
                    'projection' => PassageSubjectProjector::class
                ],
                'passage_problem_projection' => [
                    'read_model' => PassageProblemReadModel::class,
                    'projection' => PassageProblemProjector::class
                ],
                'lesson_type_projection' => [
                    'read_model' => LessonTypeReadModel::class,
                    'projection' => LessonTypeProjector::class
                ],
                'lesson_problem_projection' => [
                    'read_model' => LessonProblemReadModel::class,
                    'projection' => LessonProblemProjector::class
                ],
                'lesson_section_projection' => [
                    'read_model' => LessonSectionReadModel::class,
                    'projection' => LessonSectionProjector::class
                ],
                'problem_section_projection' => [
                    'read_model' => ProblemSectionReadModel::class,
                    'projection' => ProblemSectionProjection::class
                ]
            ]
        ]
    ]
];

