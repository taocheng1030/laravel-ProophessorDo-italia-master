<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\ProophessorDo\Model\Passages\Command\AddPassage;
use App\ProophessorDo\Model\Passages\PassageId;
use Illuminate\Console\Command;
use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;
use Prooph\ServiceBus\CommandBus;

class portPassages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:passages';

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
     * @var CommandBus
     */
    private $commandBus;
    private $connectionNewDb;

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
        $passages = $this->connectionOldDb
            ->table('rsatpassage')
            ->get();

        $course = $this->connectionNewDb
            ->table('read_course')
            ->where('name', 'SAT')
            ->value('id');

        foreach ($passages as $passage) {
            $oldPassageType = $this->connectionOldDb
                ->table('rsatpassagetype')
                ->where('id', $passage->rsatpassagetypeid)
                ->value('label');

            $newPassageSubjectType = $this->connectionNewDb
                ->table('read_passage_subject')
                ->where('label', $oldPassageType)
                ->value('id');

            $command = AddPassage::withData(
                PassageId::generate()->toString(),
                (string) $passage->id,
                $this->parseCode($passage->code),
                $passage->title,
                $course,
                $newPassageSubjectType,
                $passage->active,
                $passage->administrativenotes
            );

            $this->commandBus->dispatch($command);
        }
    }

    private function parseCode($code)
    {
        $code = str_replace("<passage>", "", $code);
        $code = str_replace("</passage>", "", $code);
        return $code;
    }
}
