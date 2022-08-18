<?php

namespace App\Model\DB\Postgres;

use App\Service\DB\OrmFactoryInterface;
use App\Service\DB\SqlOrmInterface;

interface PostgresFactoryInterface extends OrmFactoryInterface 
{
    public static function createPostgresORM(): SqlOrmInterface;
}