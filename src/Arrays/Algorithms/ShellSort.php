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
class ShellSort extends ASorting implements Sorting
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
        $divide = floor($count / 2);
        while ($divide > 0) {
            for ($i = 0; $i < ( $count - $divide ); $i++) {
                $j = $i;
                while ($j >= 0 && $array[$j] > $array[$j + $divide]) {
                    list($array[$j], $array[$j + $divide]) = [ $array[$j + $divide], $array[$j] ];
                    $j--;
                }
            }
            $divide = floor($divide / 2);
        }
        self::timerStop();
    }
}