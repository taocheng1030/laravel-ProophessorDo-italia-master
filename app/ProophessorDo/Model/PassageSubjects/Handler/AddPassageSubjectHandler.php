<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageSubjects\Handler;


use App\ProophessorDo\Model\PassageSubjects\Command\AddPassageSubject;
use App\ProophessorDo\Model\PassageSubjects\PassageSubject;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectRepository;

class AddPassageSubjectHandler
{
    /**
     * @var PassageSubjectRepository
     */
    private $repository;

    public function __construct(PassageSubjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(AddPassageSubject $command)
    {
        $passageSubject = PassageSubject::create(
            $command->passageSubjectId(),
            $command->label(),
            $command->abbreviation(),
            $command->active()
        );
        $this->repository->add($passageSubject);
    }
}