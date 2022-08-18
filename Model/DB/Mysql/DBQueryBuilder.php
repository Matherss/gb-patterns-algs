<?php

namespace App\Model\DB\Mysql;

use App\Service\DB\DBQueryInterface;
use MysqlDialect;
use PDOStatement;

class DBQueryBuilder extends MysqlDialect  implements DBQueryInterface
{
    private static function sql(string $sql, array $args = []): PDOStatement
    {
        $stmt = self::getInstance()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }


    public static function select(string $sql, array $args = []): array
    {
        return self::sql($sql, $args)->fetchAll();
    }


    public static function insert(string $sql, array $args = []): int
    {
        self::sql($sql, $args);
        return self::$instance->lastInsertId();
    }


    public static function update(string $sql, array $args = []): int
    {
        $stmt = self::sql($sql, $args);
        return $stmt->rowCount();
    }


    public static function delete(string $sql, array $args = []): int
    {
        $stmt = self::sql($sql, $args);
        return $stmt->rowCount();
    }
}