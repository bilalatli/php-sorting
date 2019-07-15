<?php

use BALib\Sorting\Benchmark;
use BALib\Sorting\Algorithms\BubbleSort;
use BALib\Sorting\Algorithms\BubbleSortWithFlag;
use BALib\Sorting\Algorithms\CocktailSort;
use BALib\Sorting\Algorithms\CombinedBubbleSort;
use BALib\Sorting\Algorithms\CombSort;
use BALib\Sorting\Algorithms\CountingSort;
use BALib\Sorting\Algorithms\GnomeSort;
use BALib\Sorting\Algorithms\HeapSort;
use BALib\Sorting\Algorithms\MergeSort;
use BALib\Sorting\Algorithms\OddEvenSort;
use BALib\Sorting\Algorithms\QuickSort;
use BALib\Sorting\Algorithms\SelectionSort;
use BALib\Sorting\Algorithms\ShellSort;
use BALib\Sorting\Algorithms\StupidSort;
use BALib\Sorting\Algorithms\InsertSort;

/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 */
class Sorting
{
    /**
     * @var bool
     */
    private static $benchmark = false;

    /**
     * @var Benchmark
     */
    private static $lastBenchmark;

    /**
     * Shell Sort Algorithm
     *
     * @param array $array
     *
     * @return array
     */
    public static function shellSort(array &$array): array
    {
        ShellSort::setBenchmark(self::$benchmark);
        $output = ShellSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = ShellSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Bubble Sort Algorithm
     *
     * @param array $array
     *
     * @return array
     */
    public static function bubbleSort(array &$array): array
    {
        BubbleSort::setBenchmark(self::$benchmark);
        $output = BubbleSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = BubbleSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Counting Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function countingSort(array &$array): array
    {
        CountingSort::setBenchmark(self::$benchmark);
        $output = CountingSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = CountingSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Heap Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function heapSort(array &$array): array
    {
        HeapSort::setBenchmark(self::$benchmark);
        $output = HeapSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = HeapSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Insert Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function insertSort(array &$array): array
    {
        InsertSort::setBenchmark(self::$benchmark);
        $output = InsertSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = InsertSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Selection Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function selectionSort(array &$array): array
    {
        SelectionSort::setBenchmark(self::$benchmark);
        $output = SelectionSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = SelectionSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Comb Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function combSort(array &$array): array
    {
        CombSort::setBenchmark(self::$benchmark);
        $output = CombSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = CombSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Quick Sort
     *
     * @param array $array
     * @param int   $left
     * @param int   $right
     *
     * @return array
     */
    public static function quickSort(array &$array, int $left = 0, int $right = 0): array
    {
        QuickSort::setBenchmark(self::$benchmark);
        QuickSort::setLeft($left);
        QuickSort::setRight($right);
        $output = QuickSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = QuickSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Merge Sort
     *
     * @param array    $array
     *
     * @param int      $first
     * @param int|null $last
     *
     * @return array
     */
    public static function mergeSort(array &$array, int $first = 0, int $last = null): array
    {
        MergeSort::setBenchmark(self::$benchmark);
        MergeSort::setFirst($first);
        MergeSort::setLast($last);
        $output = MergeSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = MergeSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Gnome Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function gnomeSort(array &$array): array
    {
        GnomeSort::setBenchmark(self::$benchmark);
        $output = GnomeSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = GnomeSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Cocktail Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function cocktailSort(array &$array): array
    {
        CocktailSort::setBenchmark(self::$benchmark);
        $output = CocktailSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = CocktailSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Odd Even Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function oddEvenSort(array &$array): array
    {
        OddEvenSort::setBenchmark(self::$benchmark);
        $output = OddEvenSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = OddEvenSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Bubble Sort With Flag
     *
     * @param array $array
     *
     * @return array
     */
    public static function bubbleSortWithFlag(array &$array): array
    {
        BubbleSortWithFlag::setBenchmark(self::$benchmark);
        $output = BubbleSortWithFlag::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = BubbleSortWithFlag::getBenchmark();
        }
        return $output;
    }

    /**
     * Combined Bubble Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function combinedBubbleSort(array &$array): array
    {
        CombinedBubbleSort::setBenchmark(self::$benchmark);
        $output = CombinedBubbleSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = CombinedBubbleSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Stupid Sort
     *
     * @param array $array
     *
     * @return array
     */
    public static function stupidSort(array &$array): array
    {
        StupidSort::setBenchmark(self::$benchmark);
        $output = StupidSort::sort($array);
        if (true === self::$benchmark) {
            self::$lastBenchmark = StupidSort::getBenchmark();
        }
        return $output;
    }

    /**
     * Get Benchmark
     *
     * @return Benchmark
     */
    public static function getBenchmark()
    {
        if (false === self::$benchmark && null !== self::$lastBenchmark) {
            throw new LogicException("Benchmark failed. Please enable benchmarking first");
        }
        return self::$lastBenchmark;
    }

    /**
     * Set Active or Passive Benchmarking
     *
     * @param bool $benchmark
     */
    public static function setBenchmark(bool $benchmark)
    {
        self::$benchmark = $benchmark;
    }
}