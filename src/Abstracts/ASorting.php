<?php

namespace BALib\Sorting\Abstracts;


use BALib\Sorting\Benchmark;
use LogicException;

/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 * @package BALib\Sorting\Abstracts;
 */
abstract class ASorting
{
    /**
     * @var bool
     */
    private static $benchmark = false;

    /**
     * @var float
     */
    private static $timerStart;

    /**
     * @var float
     */
    private static $timerStop;

    /**
     * Set Benchmark is Enable or Disable
     *
     * @param bool $benchmark
     */
    final public static function setBenchmark(bool $benchmark)
    {
        self::$benchmark = $benchmark;
    }

    /**
     * Start's the Timer
     */
    final protected static function timerStart()
    {
        if (self::$benchmark) {
            self::$timerStart = microtime(true);
        }
    }

    /**
     * Stop's the Timer
     */
    final protected static function timerStop()
    {
        if (self::$benchmark) {
            self::$timerStop = microtime(true);
        }
    }

    /**
     * Get Benchmark Data
     *
     * @return Benchmark
     */
    public static function getBenchmark()
    {
        if (false === self::$benchmark) {
            throw new LogicException("Benchmark failed. Please enable benchmarking first");
        }
        return new Benchmark(self::$timerStart, self::$timerStop);
    }
}