<?php

namespace App\Model\DB\Mysql;

use App\Service\DB\DBQueryInterface;
use App\Service\DB\DBRecordInterface;
use App\Service\DB\SqlOrmInterface;
use MysqlDialect;
use PDO;

class MySqlORM implements SqlOrmInterface
{
    public function createConnection(): PDO
    {
       return (new MysqlDialect)->getInstance();
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