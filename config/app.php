<?php

use App\EventSourcing\Model\LessonProblems\Command\AddProblemToLesson;
use App\EventSourcing\Model\LessonSection\Command\CreateLessonSection;
use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Answer\Command\ChangeAnswerSequence;
use App\ProophessorDo\Model\Answer\Command\ChangeAnswerText;
use App\ProophessorDo\Model\Answer\Command\CreateAnswer;
use App\ProophessorDo\Model\Answer\Command\DeleteAnswer;
use App\ProophessorDo\Model\Answer\Command\MarkAnswerCorrect;
use App\ProophessorDo\Model\Course\Command\AddCourse;
use App\ProophessorDo\Model\Lesson\Command\UpdateLessonDescription;
use App\ProophessorDo\Model\Lesson\Event\UpdateLessonReferenceId;
use App\ProophessorDo\Model\LessonType\Command\CreateLessonType;
use App\ProophessorDo\Model\PassageProblem\Command\AddProblemToPassage;
use App\ProophessorDo\Model\PassageProblem\Command\ChangePassageProblemSequence;
use App\ProophessorDo\Model\Passages\Command\AddPassage;
use App\ProophessorDo\Model\Passages\Command\DeletePassage;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageActivity;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageNote;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageSubject;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageTest;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageText;
use App\ProophessorDo\Model\Passages\Command\UpdatePassageTitle;
use App\ProophessorDo\Model\PracticeTest\Command\CreatePracticeTest;
use App\ProophessorDo\Model\Problem\Command\UpdateProblemText;
use App\ProophessorDo\Model\ProblemFormat\Command\CreateProblemFormat;
use App\ProophessorDo\Model\ProblemSection\Command\CreateProblemSection;
use App\ProophessorDo\Model\ProblemStats\Command\CreateProblemStats;
use App\ProophessorDo\Model\Video\Command\CreateVideo;
use Prooph\ProophessorDo\Model\Category\Command\CreateCategory;
use Prooph\ProophessorDo\Model\Lesson\Command\CreateLesson;
use Prooph\ProophessorDo\Model\Problem\Command\AddVideoToProblem;
use Prooph\ProophessorDo\Model\Problem\Command\DeleteProblem;
use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Problem\Command\AddProblem;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemActivity;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemFormat;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemNotes;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSection;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSubjectId;
use Prooph\ProophessorDo\Model\Test\Command\CreateTest;
use Prooph\ProophessorDo\Model\Unit\Command\CreateUnit;
use Prooph\ProophessorDo\Model\User\Command\RegisterUser;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'syslog'),

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */
        TwigBridge\ServiceProvider::class,
        Barryvdh\Cors\ServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\ProophessorDoServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Twig' => \TwigBridge\Facade\Twig::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

    'command_alias' => [
        'register-user' => RegisterUser::class,
        'create-problem' => AddProblem::class,
        'create-passage' => AddPassage::class,
        'update-passage-text' => UpdatePassageText::class,
        'update-passage-title' => UpdatePassageTitle::class,
        'update-passage-test' => UpdatePassageTest::class,
        'update-passage-subject' => UpdatePassageSubject::class,
        'update-passage-active' => UpdatePassageActivity::class,
        'update-passage-notes' => UpdatePassageNote::class,
        'delete-passage' => DeletePassage::class,
        'add-problem-to-passage' => AddProblemToPassage::class,
        'change-passage-problem-sequence' => ChangePassageProblemSequence::class,
        'create-lesson' => CreateLesson::class,
        'create-unit' => CreateUnit::class,
        'create-practice-test' => CreatePracticeTest::class,
        'create-category' => CreateCategory::class,
        'create-test' => CreateTest::class,
        'create-subject' => CreateSubject::class,
        'create-section' => CreateSection::class,
        'create-answer' => CreateAnswer::class,
        'update-problem-activity' => UpdateProblemActivity::class,
        'update-problem-difficulty' => UpdateProblemDifficulty::class,
        'update-problem-reference-number' => UpdateProblemReferenceNumber::class,
        'update-problem-format' => UpdateProblemFormat::class,
        'update-problem-notes' => UpdateProblemNotes::class,
        'update-problem-section' => UpdateProblemSection::class,
        'update-problem-subject' => UpdateProblemSubjectId::class,
        'update-problem-text' => UpdateProblemText::class,
        'create-course' => AddCourse::class,
        'create-problem-format' => CreateProblemFormat::class,
        'create-video' => CreateVideo::class,
        'create_problem_stats' => CreateProblemStats::class,
        'create-lesson-type' => CreateLessonType::class,
        'add-problem-to-lesson' => AddProblemToLesson::class,
        'create-lesson-section' => CreateLessonSection::class,
        'add-video-to-problem' => AddVideoToProblem::class,
        'delete-problem' => DeleteProblem::class,
        'delete-answer' => DeleteAnswer::class,
        'answer-choice-changed' => MarkAnswerCorrect::class,
        'change-answer-text' => ChangeAnswerText::class,
        'update-lesson-description' => UpdateLessonDescription::class,
        'create-problem-section' => CreateProblemSection::class,
        'change-answer-sequence' => ChangeAnswerSequence::class,
        'update-lesson-reference-id' => UpdateLessonReferenceId::class
    ]
];
