### 1. Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.

```php

<?php

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class Explorer
{
    private string $currentPath = '';

    private function getPathArray($path): array
    {
        $array = [];
        $objects = new RecursiveDirectoryIterator($path);
        foreach ($objects as $object) {
            $name = $object->getFilename();
             $array[$object->getPathname()] = $name;
        }
        return $array;
    }

    public function printDirContent($dir): void
    {
        $this->currentPath = $this->currentPath ? $this->currentPath .= DIRECTORY_SEPARATOR . $dir : $dir;
        $array = $this->getPathArray($this->currentPath);
        foreach ($array as $item) {
            echo $item . PHP_EOL;
        }
    }
}
?>
```


### 2. Определить сложность следующих алгоритмов:

#### ● поиск элемента массива с известным индексом,

> O(1)

#### ● дублирование массива через foreach,

> O(n)

#### ● рекурсивная функция нахождения факториала числа.

> O(n)


### 3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?
```php
// 1)
$n = 100;
$array[]= [];
for ($i = 0; $i < $n; $i++) {
for ($j = 1; $j < $n; $j *= 2) {
$array[$i][$j]= true;
}
}

```

> сложность O(n**2) итераций 100 внешнего цикла, 7 внутреннего, Можно это представить как 100n * 7n, но в подсчёте сложности алгоритмов принято убирать количество итераций, поэтому остается n*n или n в квадрате. Общее число итераций 700

---


```php

// 2)
$n = 100;
$array[] = [];
for ($i = 0; $i < $n; $i += 2) {
for ($j = $i; $j < $n; $j++) {
$array[$i][$j]= true;
} }

```


> сложность О(n**2) итераций внешнего цикла будет 50, внутреннего 51, Можно это представить как 50n * 51n Общее число итераций 2550
