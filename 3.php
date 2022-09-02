<?php

function initArray($count)
{
    $array = [];
    for ($i = 1; $i < $count; $i++) {
        $array[] = $i;
    }
    return $array;
}

function binarySearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while ($start <= $end) {
        $n++;

        $base = floor(($start + $end) / 2);


        echo "Проверяется элемент с индексом: $base" . PHP_EOL;

        if ($myArray[$base] == $num) {
            echo "Количество итераций: $n искомого числа $num под индексом $base" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    echo "ЧИСЛО НЕ НАЙДЕНО! Количество итераций: $n -- $myArray[$base] -- $num" . PHP_EOL;
    return null;
}

function linearSearch ($myArray, $num) {

    $arrCount = count($myArray);

    for ($i = 0; $i < $arrCount; $i++) {

        echo "Проверяется число с индексом: $i".PHP_EOL;

        if($myArray[$i] == $num) {
            echo "ЧИСЛО НАЙДЕНО! Индекс $i".PHP_EOL;
            return $i;
        }

        elseif ($myArray[$i] > $num) {
            return null;
        }
    }
}
function interpolationSearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while (($start <= $end) && ($num >= $myArray[$start]) && ($num <= $myArray[$end])) {
        $n++;
        $base = floor( $start +
            ($end - $start) / ($myArray[$end] - $myArray[$start])
            * ($num - $myArray[$start])
        );

        echo "Проверяется элемент с индексом: $base" . PHP_EOL;

        if ($myArray[$base] == $num) {
            echo "Количество итераций: $n искомого числа $num под индексом $base" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    echo "ЧИСЛО НЕ НАЙДЕНО! Количество итераций: $n" . PHP_EOL;
    return null;

}


const NUM = 500;
$arr = initArray(1000000);

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, NUM).PHP_EOL;

echo "Линейный поиск".PHP_EOL;
echo linearSearch($arr, NUM).PHP_EOL;

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($arr, NUM);