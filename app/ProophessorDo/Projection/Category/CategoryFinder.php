<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Category;

use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Projection\Table;

class CategoryFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findByUuid(CategoryId $categoryId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE category_id = :categoryId LIMIT 1',
                Table::CATEGORY
            )
        );
        $statement->bindValue('categoryId', $categoryId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}