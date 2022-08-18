<?php

namespace App\Model\DB\Postgres;

use App\Service\DB\DBQueryInterface;
use App\Service\DB\DBRecordInterface;
use App\Service\DB\SqlOrmInterface;
use PostgresDialect;
use PDO;

class PostgresORM implements SqlOrmInterface
{
    public function createConnection(): PDO
    {
       return (new PostgresDialect)->getInstance();
    }

    public function createQueryBuilder(): DBQueryInterface
    {
        return new DBQueryBuilder;
    }

    public function createDbRecord(): DBRecordInterface
    {
        return new DBRecord;
    }
}