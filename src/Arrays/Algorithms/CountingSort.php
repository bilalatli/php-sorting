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
class CountingSort extends ASorting implements Sorting
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
        $max = max($array);
        $c = [];
        $count = count($array);
        for ($i = 0; $i <= $max; $i++) {
            $c[$i] = 0;
        }
        for ($i = 0; $i < $count; $i++) {
            $c[$array[$i]]++;
        }
        $b = 0;
        for ($j = 0; $j <= $max; $j++) {
            for ($i = 0; $i < $c[$j]; $i++) {
                $array[$b] = $j;
                $b++;
            }
        }
        self::timerStop();
        return $array;
    }
}