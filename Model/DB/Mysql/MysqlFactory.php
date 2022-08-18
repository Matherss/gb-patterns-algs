<?php

namespace App\Model\DB\Mysql\MysqlFactory;

use App\Model\Mysql\DB\MysqlFactoryInterface;
use App\Model\Mysql\DB\MySqlORM;
use App\Service\DB\SqlOrmInterface;

class MysqlFactory implements MysqlFactoryInterface
{
    public static function createMysqlORM(): SqlOrmInterface {
        return new MySqlORM;
    }
}