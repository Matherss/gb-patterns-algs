<?php

class MysqlDialect
{
    const DSN = 'mysql:dbname=testdb;host=127.0.0.1;port=3306';
    const USER = 'root';
    const PASSWORD = '12345';
    const OPTIONS = [
        PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    protected static PDO $instance;

    public static function getInstance(): ?PDO
    {
        if (!self::$instance) {
            self::$instance = new PDO(self::DSN, self::USER, self::PASSWORD, self::OPTIONS);
        }

        return self::$instance;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

}