<?php
/**
 *
 * @author  Bilal ATLI
 * Date: 14.07.2019
 * Time: 18:01
 * E-mail : <bilal@garivaldi.com>, <ytbilalatli@gmail.com>
 * Phone : +90 0-542-433-09-19
 * Original Filename : Sorting.php
 *
 * @package BALib\Sorting\Interfaces;
 */

namespace BALib\Sorting\Interfaces;


interface Sorting
{
    /**
     * Sort Array
     *
     * @param array &$array
     *
     * @return array
     */
    public static function sort(array &$array) : array;
}