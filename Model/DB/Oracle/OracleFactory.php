<?php

namespace App\Model\DB\Oracle;

use App\Model\DB\Oracle\OracleORM;
use App\Service\DB\SqlOrmInterface;

class OracleFactory implements OracleFactoryInterface
{
    public static function createOracleORM(): SqlOrmInterface {
        return new OracleORM;
    }
}