<?php

namespace App\Model\DB\Oracle;

use App\Service\DB\OrmFactoryInterface;
use App\Service\DB\SqlOrmInterface;

interface OracleFactoryInterface extends OrmFactoryInterface 
{
    public static function createOracleORM(): SqlOrmInterface;
}