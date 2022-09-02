<?php

function combSort($arr)
{
    $gap = count($arr);
    $swap = true;
    while ($gap > 1 || $swap) {
        if ($gap > 1) {
            $gap /= 1.25;
        }
        $swap = false;
        $i = 0;
        while ($i + $gap < count($arr)) {
            if ($arr[$i] > $arr[$i + $gap]) {
                list($arr[$i], $arr[$i + $gap]) = array($arr[$i + $gap], $arr[$i]);
                $swap = true;
            }
            ++$i;
        }
    }
    return $arr;
}

function bubbleSort($array)
{

    for ($i = 0; $i < count($array); $i++) {
        $count = count($array);
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    return $array;
}

function quickSort(array &$arr, $low, $high)
{
    $i = $low;
    $j = $high;
    $middle = $arr[($low + $high) / 2];   
    do {
        while ($arr[$i] < $middle) {
            ++$i;
        }     
        while ($arr[$j] > $middle) {
            --$j;
        }     
        if ($i <= $j) {

            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;

            $i++;
            $j--;
        }
    } while ($i < $j);

    if ($low < $j) {
        quickSort($arr, $low, $j);
    }

    if ($i < $high) {
        quickSort($arr, $i, $high);
    }

}



function initArray($count)
{
    $array = [];
    for ($i = 0; $i < $count; $i++) {
        $array[] = $i;
    }
    return $array;
}


$arr = initArray(10000);

$lastIndex = count($arr) - 1;

$start = microtime(true);
bubbleSort($arr);
echo "Сортировка пузырьком: ".( microtime(true) - $start).PHP_EOL;

$arr = initArray(10000);
$start = microtime(true);
quickSort($arr, 0, $lastIndex);
echo "Сортировка быстрая: ".( microtime(true) - $start).PHP_EOL;

$arr = initArray(10000);
$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: ".( microtime(true) - $start).PHP_EOL;

