<?php

namespace App\Service\DB;

use PDO;

interface SqlFactoryInterface
{
    public function createORM(string $dialect);
}