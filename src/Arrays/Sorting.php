<?php

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
     * Shell Sort Algorithm
     *
     * @param array $array
     *
     * @return array
     */
    public static function shellSort(array &$array): array
    {
        return ShellSort::sort($array);
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
        return BubbleSort::sort($array);
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
        return CountingSort::sort($array);
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
        return HeapSort::sort($array);
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
        return InsertSort::sort($array);
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
        return SelectionSort::sort($array);
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
        return CombSort::sort($array);
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
        QuickSort::setLeft($left);
        QuickSort::setRight($right);
        return QuickSort::sort($array);
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
        MergeSort::setFirst($first);
        MergeSort::setLast($last);
        return MergeSort::sort($array);
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
        return GnomeSort::sort($array);
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
        return CocktailSort::sort($array);
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
        return OddEvenSort::sort($array);
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
        return BubbleSortWithFlag::sort($array);
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
        return CombinedBubbleSort::sort($array);
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
        return StupidSort::sort($array);
    }
}