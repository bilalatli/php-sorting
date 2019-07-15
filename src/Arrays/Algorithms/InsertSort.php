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
class InsertSort extends ASorting implements Sorting
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
            $key = $i + 1;
            $tmp = $array[$key];
            for ($j = ( $i + 1 ); $j > 0; $j--) {
                if ($tmp < $array[$j - 1]) {
                    $array[$j] = $array[$j - 1];
                    $key = $j - 1;
                }
            }
            $array[$key] = $tmp;
        }
        self::timerStop();
        return $array;
    }
}