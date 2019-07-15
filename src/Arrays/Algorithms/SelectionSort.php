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
class SelectionSort extends ASorting implements Sorting
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
        for ($i = 0; $i < ( $count - 1 ); $i++) {
            $key = $i;
            for ($j = ( $i + 1 ); $j < $count; $j++) {
                if ($array[$j] < $array[$key]) {
                    $key = $j;
                }
            }
            if ($key != $i) {
                list($array[$key], $array[$i]) = [ $array[$i], $array[$key] ];
            }
        }
        self::timerStop();
        return $array;
    }
}