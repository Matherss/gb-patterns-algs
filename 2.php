<?php

function filterArrayByValue($array, $value): array
{
    return array_filter($array, static fn($item) => $item !== $value);
}
var_dump(filterArrayByValue($array, 15));