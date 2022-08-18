<?php

namespace App\Service\DB;

interface SqlOrmInterface
{
    public function createConnection();
    public function createQueryBuilder();
    public function createDbRecord();
}