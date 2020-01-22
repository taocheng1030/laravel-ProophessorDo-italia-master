<?php

namespace App\Console\Commands;

use App\Subject;
use Illuminate\Console\Command;
use Illuminate\Database\DatabaseManager;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\Command\CreateCategory;
use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ServiceBus\CommandBus;

class portCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * @var DatabaseManager
     */
    private $connection;
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
    public function __construct(DatabaseManager $databaseManager, CommandBus $commandBus)
    {
        parent::__construct();
        $this->connection = $databaseManager->connection('old_cc');
        $this->commandBus = $commandBus;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $categories = $this->connection->select("SELECT * FROM `rsattag`");
        $subjects = $this->connection->select("SELECT * FROM `subject`");

        $subjectCollection = collect($subjects);

        foreach ($categories as $category) {
            $subjectId = $category->subjectid;

            $filtered = $subjectCollection->filter(function($value, $key) use ($subjectId){
                return $value->id === $subjectId;
            })->first();

            $newSubject = Subject::where('name', $filtered->label)->first();

            $command = CreateCategory::withData(
                CategoryId::generate()->toString(),
                $category->label,
                $newSubject->id
            );
            $this->commandBus->dispatch($command);
        }
    }
}
