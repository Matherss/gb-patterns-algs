<?php

use PDO;
use SqlDialects;

class SQLFactory implements SqlFactoryInterface
{
    public function __construct(
        private MysqlFactoryInterface $mysqlFactory,
        private PostgresFactoryInterface $postgresFactory,
        private OracleFactoryInterface $oracleFactory
    ){}

    public function createORM(string $dialect)
    {
        return match($dialect)
        {
            SqlDialects::MYSQL => self::$mysqlFactory,
            SqlDialects::POSTGRES => self::$postgresFactory,
            SqlDialects::ORACLE => self::$oracleFactory,
        };
    }
}