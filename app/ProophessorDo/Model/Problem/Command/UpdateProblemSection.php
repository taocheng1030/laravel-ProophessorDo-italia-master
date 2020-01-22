<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use App\ProophessorDo\Model\Section\SectionId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class UpdateProblemSection extends Command implements PayloadConstructable
{

    use PayloadTrait;

    public static function withData(string $problemId, string $sectionId)
    {
        return new self(
            [
                'problemId' => $problemId,
                'sectionId' => $sectionId
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problemId']);
    }

    public function sectionId()
    {
        return SectionId::fromString($this->payload['sectionId']);
    }
}