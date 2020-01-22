<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Unit;


use App\ProophessorDo\Model\Unit\UnitMultiLineLabel;
use App\ProophessorDo\Model\Unit\UnitReferenceId;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Unit\Event\UnitWasCreated;
use Prooph\ProophessorDo\Model\User\UserId;
use Ramsey\Uuid\UuidInterface;

class Unit extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var UnitId
     */
    protected $unitId;

    /**
     * @var UuidInterface
     */
    protected $uuid;

    /**
     * @var UnitLabel
     */
    protected $name;

    /**
     * @var UnitMultiLineLabel
     */
    protected $multiLineLabel;

    /**
     * @var UnitReferenceId
     */
    protected $refId;

    /**
     * @var SubjectId
     */
    protected $subjectId;

    /**
     * @var UserId
     */
    protected $createdBy;

    public static function create(
        UnitId $unitId,
        UnitLabel $unitName,
        UnitMultiLineLabel $multiLineLabel,
        UnitReferenceId $referenceId,
        SubjectId $subjectId,
        UserId $createdBy
    ) {
        $self = new self;
        $self->recordThat(
            UnitWasCreated::withData(
                $unitId,
                $unitName,
                $multiLineLabel,
                $referenceId,
                $subjectId,
                $createdBy
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->unitId->toString();
    }

    public function whenUnitWasCreated(UnitWasCreated $event)
    {
        $this->unitId = $event->unitId();
        $this->name = $event->name();
        $this->multiLineLabel = $event->multiLineLabel();
        $this->refId = $event->referenceId();
        $this->subjectId = $event->subjectId();
        $this->createdBy = $event->createBy();
    }
}