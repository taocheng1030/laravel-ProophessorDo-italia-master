<?php

namespace App\Console\Commands;

use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Section\SectionName;
use Illuminate\Console\Command;
use Prooph\ServiceBus\CommandBus;

class portSection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:section';

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
        $sections = [
            'Reading',
            'Challenge/Practice(module)',
            'Drill',
            'Standard',
            'Worksheet'
        ];

        foreach ($sections as $section) {
            $command = CreateSection::withData(
                SectionId::generate()->toString(),
                SectionName::fromString($section)->toString()
            );
            $this->commandBus->dispatch($command);
        }
    }
}
