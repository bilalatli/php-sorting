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

require_once "vendor/autoload.php";

$dummyArray = ArrayGenerator::createArray(5000);

Sorting::setBenchmark(true);

Sorting::quickSort($dummyArray);
dd(Sorting::getBenchmark()->getTimeDifference());