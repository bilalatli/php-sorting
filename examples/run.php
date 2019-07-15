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

$dummyArray = ArrayGenerator::createArray(1000);

$methods = [ 'shellSort', 'bubbleSort', 'countingSort', 'heapSort', 'insertSort', 'selectionSort', 'combSort', 'quickSort', 'mergeSort', 'gnomeSort', 'cocktailSort', 'oddEvenSort', 'bubbleSortWithFlag', 'combinedBubbleSort', 'stupidSort' ];

// Note: Stupid Sort is Really Stupid Bigger Item Counts :). Discard It

$arrays = [];
$results = [];

foreach ($methods as $method) {
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