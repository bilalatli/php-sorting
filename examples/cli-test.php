<?php
/**
 *
 * @author Bilal ATLI
 * Date: 14.07.2019
 * Time: 17:39
 * E-mail : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * Phone : +90 0-542-433-09-19
 * Original Filename : run.php
 */

use BALib\Sorting\ArrayGenerator;
use BALib\Sorting\Arrays\Sorting;

require_once "vendor/autoload.php";

if ($argc <= 1) {
    $itemCount = 5000;
} else {
    $count = intval($argv[1]);
    if ($count <= 0) {
        throw new InvalidArgumentException("Item count must be greater than zero");
    }
    $itemCount = $count;
}

$dummyArray = ArrayGenerator::createArray($itemCount);

$methods = [ 'shellSort', 'bubbleSort', 'countingSort', 'heapSort', 'insertSort', 'selectionSort', 'combSort', 'quickSort', 'mergeSort', 'gnomeSort', 'cocktailSort', 'oddEvenSort', 'bubbleSortWithFlag', 'combinedBubbleSort', 'stupidSort' ];

$without = [ 'stupidSort' ];

// Note: Stupid Sort is Really Stupid Bigger Item Counts :). Discard It

$arrays = [];
$results = [];

foreach ($methods as $method) {
    if (in_array($method, $without)) {
        continue;
    }
    $arrays[$method] = $dummyArray;
}

Sorting::setBenchmark(true);

foreach ($arrays as $method => $dummy) {
    echo ">> $method has started." . PHP_EOL;
    Sorting::$method($dummy);
    $time = Sorting::getBenchmark()->getTimeDifference();
    $results[$method] = $time;
    echo ">> $method completed in $time second." . PHP_EOL;
}

asort($results);

dd($results);