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
class BubbleSort extends ASorting implements Sorting
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
        for ($j = 0; $j < ( $count - 1 ); $j++) {
            for ($i = 0; $i < ( $count - $j - 1 ); $i++) {
                if ($array[$i] > $array[$i + 1]) {
                    list($array[$i], $array[$i + 1]) = [ $array[$i + 1], $array[$i] ];
                }
            }
        }
        self::timerStop();
        return $array;
    }
}