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
class QuickSort extends ASorting implements Sorting
{

    /**
     * @var int
     */
    private static $right = 0;

    /**
     * @var int
     */
    private static $left = 0;

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

        self::quickSort($array, self::$left, self::$right);

        self::timerStop();
        return $array;
    }

    /**
     * Quick Sort
     *
     * @param array $array
     * @param int   $left
     * @param int   $right
     */
    private static function quickSort(&$array, $left = 0, $right = 0)
    {
        if ($right == 0) {
            $right = count($array) - 1;
        }
        $i = $left;
        $j = $right;
        $x = $array[( $left + $right ) / 2];
        do {
            while ($array[$i] < $x) {
                $i++;
            }
            while ($array[$j] > $x) {
                $j--;
            }
            if ($i <= $j) {
                if ($array[$i] > $array[$j]) {
                    list($array[$i], $array[$j]) = [ $array[$j], $array[$i] ];
                }
                $i++;
                $j--;
            }
        } while ($i <= $j);
        if ($i < $right) {
            self::quickSort($array, $i, $right);
        }
        if ($j > $left) {
            self::quickSort($array, $left, $j);
        }
    }

    /**
     * Get Right
     *
     * @return int
     */
    public static function getRight(): int
    {
        return self::$right;
    }

    /**
     * Set Right
     *
     * @param int $right
     */
    public static function setRight(int $right)
    {
        self::$right = $right;
    }

    /**
     * Get Left
     *
     * @return int
     */
    public static function getLeft(): int
    {
        return self::$left;
    }

    /**
     * Set Left
     *
     * @param int $left
     */
    public static function setLeft(int $left)
    {
        self::$left = $left;
    }
}