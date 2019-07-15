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
class CocktailSort extends ASorting implements Sorting
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
        $left = 0;
        $right = $count - 1;
        do {
            for ($i = $left; $i < $right; $i++) {
                if ($array[$i] > $array[$i + 1]) {
                    list($array[$i], $array[$i + 1]) = [ $array[$i + 1], $array[$i] ];
                }
            }
            $right -= 1;
            for ($i = $right; $i > $left; $i--) {
                if ($array[$i] < $array[$i - 1]) {
                    list($array[$i], $array[$i - 1]) = [ $array[$i - 1], $array[$i] ];
                }
            }
            $left += 1;
        } while ($left <= $right);
        self::timerStop();
        return $array;
    }
}