<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\DatabaseManager;
use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Subject\SubjectName;
use Prooph\ServiceBus\CommandBus;

class portSubjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:subjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var CommandBus
     */
    protected $commandBus;

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
        $subjects = ['Reading', 'Writing and Language', 'Math'];

        foreach($subjects as $subject) {
            $command = CreateSubject::withData(
                SubjectId::generate()->toString(),
                SubjectName::fromString($subject)->toString()
            );
            $this->commandBus->dispatch($command);
        }
    }
}
