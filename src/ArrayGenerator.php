<?php

namespace BALib\Sorting;


use InvalidArgumentException;

/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 * @package BALib;
 */
class ArrayGenerator
{
    /**
     * @var int
     */
    private static $lastLimit = 0;

    /**
     * Create Random Dummy Array
     *
     * @param int  $itemLimit
     * @param bool $bigInt
     *
     * @return array
     */
    public static function createArray(int $itemLimit, bool $bigInt = false): array
    {
        if (0 >= $itemLimit) {
            throw new InvalidArgumentException("Item limit is must be greater than zero");
        }

        if (true === $bigInt) {
            $itemLimit = PHP_INT_MAX;
        }

        $items = [];

        for ($i = 0; $i <= $itemLimit; $i++) {
            $items[] = rand(1, $itemLimit);
        }

        self::$lastLimit = $itemLimit;

        return $items;
    }

    /**
     * Get Last Item Limit
     *
     * @return int
     */
    public static function getLastLimit(): int
    {
        return self::$lastLimit;
    }
}