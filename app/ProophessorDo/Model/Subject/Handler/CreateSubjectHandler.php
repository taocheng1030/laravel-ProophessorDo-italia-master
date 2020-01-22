<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Subject\Handler;

use Prooph\ProophessorDo\Model\Subject\Command\CreateSubject;
use Prooph\ProophessorDo\Model\Subject\Subject;
use Prooph\ProophessorDo\Model\Subject\SubjectRepository;

class CreateSubjectHandler
{

    /**
     * @var SubjectRepository
     */
    protected $repository;

    public function __construct(SubjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateSubject $command)
    {
        $subject = Subject::create(
            $command->subjectId(),
            $command->subjectName()
        );
        $this->repository->add($subject);
    }
}