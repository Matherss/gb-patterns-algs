<?php

namespace App\Model\DB\Oracle;

use App\Service\DB\DBQueryInterface;
use App\Service\DB\DBRecordInterface;
use App\Service\DB\SqlOrmInterface;
use OracleDialect;
use PDO;

class OracleORM implements SqlOrmInterface
{
    public function createConnection(): PDO
    {
       return (new OracleDialect)->getInstance();
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