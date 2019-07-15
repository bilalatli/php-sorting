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
class OddEvenSort extends ASorting implements Sorting
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
        $sorted = false;
        while (!$sorted) {
            $sorted = true;
            for ($i = 1; $i < ( $count - 1 ); $i += 2) {
                if ($array[$i] > $array[$i + 1]) {
                    list($array[$i], $array[$i + 1]) = [ $array[$i + 1], $array[$i] ];
                    if ($sorted) {
                        $sorted = false;
                    }
                }
            }

            for ($i = 0; $i < ( $count - 1 ); $i += 2) {
                if ($array[$i] > $array[$i + 1]) {
                    list($array[$i], $array[$i + 1]) = [ $array[$i + 1], $array[$i] ];
                    if ($sorted) {
                        $sorted = false;
                    }
                }
            }
        }
        self::timerStop();
        return $array;
    }
}