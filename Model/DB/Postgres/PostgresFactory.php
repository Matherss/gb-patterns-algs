<?php

namespace App\Model\DB\Postgres;

use App\Model\DB\Postgres\PostgresORM;
use App\Service\DB\SqlOrmInterface;

class PostgresFactory implements PostgresFactoryInterface
{
    public static function createPostgresORM(): SqlOrmInterface {
        return new PostgresORM;
    }
}
