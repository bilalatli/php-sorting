<?php

namespace BALib\Sorting\Algorithms;


use BALib\Sorting\Abstracts\ASorting;
use BALib\Sorting\Interfaces\Sorting;

/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 * @package BALib\Sorting\Algorithms;
 */
class HeapSort extends ASorting implements Sorting
{

    /**
     * Sort Array
     *
     * @param array &$array
     *
     * @return array
     */
    public static function sort(array &$array): array
    {
        self::timerStart();
        $count = count($array);
        self::heapMake($array);
        while ($count > 0) {
            list($array[0], $array[$count - 1]) = [ $array[$count - 1], $array[0] ];
            $count--;
            self::heapify($array, 0, $count);
        }
        self::timerStop();
        return $array;
    }

    /**
     * Heap Make
     *
     * @param array $array
     */
    private static function heapMake(array &$array)
    {
        $count = count($array);
        for ($i = ( $count - 1 ); $i >= 0; $i--) {
            self::heapify($array, $i, $count);
        }
    }

    /**
     * Heapify
     *
     * @param array $array
     * @param int   $pos
     * @param int   $count
     */
    private static function heapify(array &$array, int $pos, int $count)
    {
        while (2 * $pos + 1 < $count) {
            $t = 2 * $pos + 1;
            if (2 * $pos + 2 < $count && $array[2 * $pos + 2] >= $array[$t]) {
                $t = 2 * $pos + 2;
            }
            if ($array[$pos] < $array[$t]) {
                list($array[$pos], $array[$t]) = [ $array[$t], $array[$pos] ];
                $pos = $t;
            } else {
                break;
            }
        }
    }
}