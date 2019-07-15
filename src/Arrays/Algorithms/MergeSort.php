<?php

namespace BALib\Sorting\Algorithms;


use BALib\Abstracts\ASorting;
use BALib\Sorting\Interfaces\Sorting;

/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 * @package BALib\Sorting\Algorithms;
 */
class MergeSort extends ASorting implements Sorting
{

    /**
     * @var int
     */
    private static $first = 0;

    /**
     * @var int
     */
    private static $last = null;

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

        self::mergeSort($array);

        self::timerStop();
        return $array;
    }

    /**
     * Merge Sort
     *
     * @param array    $array
     * @param int      $first
     * @param int|null $last
     */
    private static function mergeSort(&$array, $first = 0, $last = null)
    {
        if (is_null($last)) {
            $last = count($array) - 1;
        }
        if ($first < $last) {
            self::mergeSort($array, $first, floor(( $first + $last ) / 2));
            self::mergeSort($array, floor(( $first + $last ) / 2) + 1, $last);

            $tmp = [];

            $middle = floor(( $first + $last ) / 2);
            $start = $first;
            $final = $middle + 1;
            for ($i = $first; $i <= $last; $i++) {
                if (( $start <= $middle ) && ( ( $final > $last ) || ( $array[$start] < $array[$final] ) )) {
                    $tmp[$i] = $array[$start];
                    $start++;
                } else {
                    $tmp[$i] = $array[$final];
                    $final++;
                }
            }

            for ($i = $first; $i <= $last; $i++) {
                $array[$i] = $tmp[$i];
            }
        }
    }

    /**
     * Get First
     *
     * @return int
     */
    public static function getFirst(): int
    {
        return self::$first;
    }

    /**
     * Set First
     *
     * @param int $first
     */
    public static function setFirst(int $first)
    {
        self::$first = $first;
    }

    /**
     * Get Last
     *
     * @return int
     */
    public static function getLast(): int
    {
        return self::$last;
    }

    /**
     * Set Last
     *
     * @param int $last
     */
    public static function setLast(int $last)
    {
        self::$last = $last;
    }
}