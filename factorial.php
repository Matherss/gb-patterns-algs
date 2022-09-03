<?php

function factorial($n)
{
    $res = 1;
    for ($i = 1; $i <= $n; $i++)
        $res = $res*$i;
    return $res;
}

var_dump(factorial(4)); // 24