<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('event-store:projection:run problem_projection')
            ->hourly();

        $schedule->command('event-store:projection:run problem_category_projection')
            ->hourly();

        $schedule->command('event-store:projection:run passage_projection')
            ->hourly();

        $schedule->command('event-store:projection:run lesson_projection')
            ->hourly();

        $schedule->command('event-store:projection:run lesson_type_projection')
            ->hourly();

        $schedule->command('event-store:projection:run unit_projection')
            ->hourly();

        $schedule->command('event-store:projection:run practice_test_projection')
            ->hourly();

        $schedule->command('event-store:projection:run category_projection')
            ->hourly();

        $schedule->command('event-store:projection:run test_projection')
            ->hourly();

        $schedule->command('event-store:projection:run subject_projection')
            ->hourly();

        $schedule->command('event-store:projection:run section_projection')
            ->hourly();

        $schedule->command('event-store:projection:run answer_projection')
            ->hourly();

        $schedule->command('event-store:projection:run course_projection')
            ->hourly();

        $schedule->command('event-store:projection:run problem_format_projection')
            ->hourly();

        $schedule->command('event-store:projection:run video_projection')
            ->hourly();

        $schedule->command('event-store:projection:run problem_stats_projection')
            ->hourly();

        $schedule->command('event-store:projection:run passage_subject_projection')
            ->hourly();

        $schedule->command('event-store:projection:run passage_problem_projection')
            ->hourly();

        $schedule->command('event-store:projection:run lesson_type_projection')
            ->hourly();

        $schedule->command('event-store:projection:run lesson_problem_projection')
            ->hourly();

        $schedule->command('event-store:projection:run lesson_section_projection')
            ->hourly();

        $schedule->command('event-store:projection:run problem_section_projection')
            ->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
