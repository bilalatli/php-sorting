<?php

namespace Tests\Unit;

use BALib\Sorting\Arrays\Sorting;
use BALib\Sorting\Benchmark;
use LogicException;
use Tests\BaseTest as TestCase;

/**
 * @author  : Bilal ATLI
 * @date    : 30.03.2019 15:44
 * @mail    : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * @phone   : +90 0-542-433-09-19
 *
 * @package Tests\Unit;
 */
class SortingTests extends TestCase
{
    /**
     * Test Shell Sort
     */
    public function testShellSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::shellSort($array);

        $this->assertTrue($array === $sort, "Shell Sort Not Working Successful");
    }

    /**
     * Test Bubble Sort
     */
    public function testBubbleSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::bubbleSort($array);

        $this->assertTrue($array === $sort, "Bubble Sort Not Working Successful");
    }

    /**
     * Test Counting Sort
     */
    public function testCountingSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::countingSort($array);

        $this->assertTrue($array === $sort, "Counting Sort Not Working Successful");
    }

    /**
     * Test Heap Sort
     */
    public function testHeapSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::heapSort($array);

        $this->assertTrue($array === $sort, "Heap Sort Not Working Successful");
    }

    /**
     * Test Insert Sort
     */
    public function testInsertSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::insertSort($array);

        $this->assertTrue($array === $sort, "Insert Sort Not Working Successful");
    }

    /**
     * Test Selection Sort
     */
    public function testSelectionSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::selectionSort($array);

        $this->assertTrue($array === $sort, "Selection Sort Not Working Successful");
    }

    /**
     * Test Comb Sort
     */
    public function testCombSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::combSort($array);

        $this->assertTrue($array === $sort, "Comb Sort Not Working Successful");
    }

    /**
     * Test Quick Sort
     */
    public function testQuickSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::quickSort($array);

        $this->assertTrue($array === $sort, "Quick Sort Not Working Successful");
    }

    /**
     * Test Merge Sort
     */
    public function testMergeSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::mergeSort($array);

        $this->assertTrue($array === $sort, "Merge Sort Not Working Successful");
    }

    /**
     * Test Gnome Sort
     */
    public function testGnomeSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::gnomeSort($array);

        $this->assertTrue($array === $sort, "Gnome Sort Not Working Successful");
    }

    /**
     * Test Cocktail Sort
     */
    public function testCocktailSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::cocktailSort($array);

        $this->assertTrue($array === $sort, "Cocktail Sort Not Working Successful");
    }

    /**
     * Test Odd Even Sort
     */
    public function testOddEvenSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::oddEvenSort($array);

        $this->assertTrue($array === $sort, "Odd Even Sort Not Working Successful");
    }

    /**
     * Test Bubble Sort With Flag
     */
    public function testBubbleSortWithFlag()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::bubbleSortWithFlag($array);

        $this->assertTrue($array === $sort, "Bubble Sort With Flag Not Working Successful");
    }

    /**
     * Test Combined Bubble Sort
     */
    public function testCombinedBubbleSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::combinedBubbleSort($array);

        $this->assertTrue($array === $sort, "Combined Bubble Sort Not Working Successful");
    }

    /**
     * Test Stupid Sort
     */
    public function testStupidSort()
    {
        Sorting::setBenchmark(true);
        $array = self::ARRAY_DUMMY;
        $sort = self::SORTED_ARRAY;
        Sorting::stupidSort($array);

        $this->assertTrue($array === $sort, "Stupid Sort Not Working Successful");
    }

    /**
     * Test Benchmark Output
     */
    public function testBenchmarkOutput()
    {
        if (Sorting::isBenchmarkActive() === true) {
            $benchmark = Sorting::getBenchmark();

            $this->assertTrue($benchmark instanceof Benchmark, "Get Benchmark Not Instance of \Benchmark Class");
        } else {
            try {
                Sorting::getBenchmark();
            } catch (LogicException $e) {
                $this->assertTrue($e->getCode() === 0x7FBB02AC, "Benchmark Mode is Disabled But Returns Wrong Error Code");
            }
        }
    }
}