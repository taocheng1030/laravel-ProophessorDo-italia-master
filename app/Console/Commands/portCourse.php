<?php

namespace App\Console\Commands;

use App\ProophessorDo\Model\Course\Command\AddCourse;
use App\ProophessorDo\Model\Course\CourseId;
use App\ProophessorDo\Model\Course\CourseName;
use App\ProophessorDo\Model\Course\CourseRefId;
use Illuminate\Console\Command;
use Prooph\ServiceBus\CommandBus;

class portCourse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:course';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * Create a new command instance.
     *
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        parent::__construct();

        $this->commandBus = $commandBus;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $command = AddCourse::withData(
            CourseName::fromString('SAT')->toString(),
            CourseRefId::fromString('course-sat-2018-10-18')->toString(),
            CourseId::generate()->toString()
        );
        $this->commandBus->dispatch($command);
    }
}
