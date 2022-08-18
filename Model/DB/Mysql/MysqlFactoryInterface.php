<?php

namespace App\Model\DB\Mysql;

use App\Service\DB\OrmFactoryInterface;
use App\Service\DB\SqlOrmInterface;

interface MysqlFactoryInterface extends OrmFactoryInterface 
{
    public static function createMysqlORM(): SqlOrmInterface;
}