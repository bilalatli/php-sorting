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
class GnomeSort extends ASorting implements Sorting
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
        $i = 1;
        $j = 2;
        while ($i < $count) {
            if ($array[$i - 1] < $array[$i]) {
                $i = $j;
                $j++;
            } else {
                list($array[$i], $array[$i - 1]) = [ $array[$i - 1], $array[$i] ];
                $i--;
                if ($i == 0) {
                    $i = $j;
                    $j++;
                }
            }
        }
        self::timerStop();
        return $array;
    }
}