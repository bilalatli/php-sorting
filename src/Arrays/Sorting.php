<?php

use BALib\Sorting\Algorithms\ShellSort;

/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 */
class Sorting
{
    /**
     * Shell Sort Algorithm
     *
     * @param array $array
     *
     * @return array
     */
    public static function shellSort(array &$array)
    {
        return ShellSort::sort($array);
    }


}