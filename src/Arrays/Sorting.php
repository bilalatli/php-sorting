<?php

use BALib\Sorting\Algorithms\ShellSort;

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
        return \BALib\Sorting\Algorithms\BubbleSort::sort($array);
    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function countingSort(array &$array): array
    {
        return \BALib\Sorting\Algorithms\CountingSort::sort($array);
    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function heapSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function insertSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function selectionSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function combSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function quickSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function mergeSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function gnomeSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function cocktailSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function oddEvenSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function bubbleSortWithFlag(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function combinedBubbleSort(array &$array): array
    {

    }

    /**
     * XXXX
     *
     * @param array $array
     *
     * @return array
     */
    public static function stupidSort(array &$array): array
    {

    }
}