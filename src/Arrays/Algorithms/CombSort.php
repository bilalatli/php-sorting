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
class CombSort extends ASorting implements Sorting
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
        $gap = $count = count($array);
        $swapped = true;
        while ($gap > 1 || $swapped) {
            if ($gap > 1) {
                $gap = floor($gap / 1.24733);
            }
            $i = 0;
            $swapped = false;
            while ($i + $gap < $count) {
                if ($array[$i] > $array[$i + $gap]) {
                    list($array[$i], $array[$i + $gap]) = [ $array[$i + $gap], $array[$i] ];
                    if (!$swapped) {
                        $swapped = true;
                    }
                }
                $i++;
            }
        }
        self::timerStop();
        return $array;
    }
}