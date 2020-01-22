<?php

namespace App\Console\Commands;

use App\ProophessorDo\Model\Video\Command\CreateVideo;
use App\ProophessorDo\Model\Video\FileName;
use App\ProophessorDo\Model\Video\FilePath;
use App\ProophessorDo\Model\Video\VideoId;
use Illuminate\Console\Command;
use Illuminate\Database\DatabaseManager;
use Prooph\ServiceBus\CommandBus;

class portVideos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:videos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'port videos over from previous system';
    /**
     * @var \Illuminate\Database\Connection
     */
    protected $connectionOldDb;
    /**
     * @var \Illuminate\Database\Connection
     */
    protected $connectionNewDb;
    /**
     * @var CommandBus
     */
    protected $commandBus;

    /**
     * Create a new command instance.
     *
     * @param DatabaseManager $databaseManager
     * @param CommandBus $commandBus
     */
    public function __construct(DatabaseManager $databaseManager, CommandBus $commandBus)
    {
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
        $videos = $this->connectionOldDb->select("SELECT * FROM video");

        foreach ($videos as $video) {

            $mp4Filename = str_replace(".flv", ".mp4", $video->filename);
            $mp4Filepath = str_replace("/flv/", "/mp4/", $video->filepath);

            $command = CreateVideo::withData(
                VideoId::generate()->toString(),
                $mp4Filename,
                $mp4Filepath,
                $video->mediaid,
                $video->width,
                $video->height,
                $video->duration
            );

            $this->commandBus->dispatch($command);
        }
    }
}
