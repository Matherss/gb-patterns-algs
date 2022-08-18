<?php

enum SqlDialects: string 
{
    case MYSQL = 'mysql';
    case POSTGRES = 'postgres';
    case ORACLE = 'oracle';

    public static function getDialect(string $dialect): self
    {
        return match ($dialect)
        {
            self::MYSQL->value => self::MYSQL,
            self::POSTGRES->value => self::POSTGRES,
            self::ORACLE->value => self::ORACLE,
        };
    }

}