## PHP Sorting Algorithms
+ Shell Sort
+ Bubble Sort
+ Counting Sort
+ Heap Sort
+ Insert Sort
+ Selection Sort
+ Comb Sort
+ Quick Sort
+ Merge Sort
+ Gnome Sort
+ Cocktail Sort
+ OddEven Sort
+ Bubble Sort With Flag
+ Combined Bubble Sort
+ Stupid Sort

## Installation
````
composer require bilalatli/php-sorting
````

## Benchmarking
+ Set Active/Passive Benchmark ;
````
// Set Active
Sorting::setBenchmark(true): void;

// Set Passive [Default]
Sorting::setBenchmark(false): void;
````

+ Get Benchmark Mode is Active or Passive ;
````
Sorting::isBenchmarkActive(): bool;
````

+ Get Benchmark Status ;
````
Sorting::getBenchmark(): BALib\Sorting\Benchmark;
````

## Unit Test
Try to run

````
vendor/bin/phpunit tests/SortingTests
````

## Cli Benchmark [Development]
````
php examples/cli-test.php {itemCount: 5000 Default}
````

### PHP Version ``php ^7.*``