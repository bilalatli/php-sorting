<?php

namespace BALib\Sorting;


/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 * @package BALib;
 */
class Benchmark
{
    /**
     * @var float
     */
    private $timerStart, $timerStop;

    /**
     * Benchmark constructor.
     *
     * @param float $timerStart
     * @param float $timerStop
     */
    function __construct(float $timerStart, float $timerStop)
    {
        $this->timerStart = $timerStart;
        $this->timerStop = $timerStop;
    }

    /**
     * Get Start Time
     *
     * @return float
     */
    public function getStartTime(): float
    {
        return $this->timerStart;
    }

    /**
     * Get Stop Time
     *
     * @return float
     */
    public function getStopTime(): float
    {
        return $this->timerStop;
    }

    /**
     * Get Time Difference [Millisecond]
     *
     * @return float
     */
    public function getTimeDifference(): float
    {
        return $this->timerStop - $this->timerStart;
    }
}