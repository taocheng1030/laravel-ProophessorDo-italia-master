<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection\Handler;

use App\EventSourcing\Model\LessonSection\Command\CreateLessonSection;
use App\EventSourcing\Model\LessonSection\LessonSection;
use App\EventSourcing\Model\LessonSection\LessonSectionRepository;

class CreateLessonSectionHandler
{
    /**
     * @var LessonSectionRepository
     */
    private $lessonSectionRepository;

    public function __construct(LessonSectionRepository $lessonSectionRepository)
    {
        $this->lessonSectionRepository = $lessonSectionRepository;
    }

    public function __invoke(CreateLessonSection $command)
    {
        $lessonSection = LessonSection::create(
            $command->lessonSectionId(),
            $command->referenceId(),
            $command->name(),
            $command->active()
        );
        $this->lessonSectionRepository->add($lessonSection);
    }
}