<?php

namespace App;

/**
    You are given an odd-length array of integers, in which all of them are the same, except for one single number.

    Complete the method which accepts such an array, and returns that single different number.

    The input array will always be valid! (odd-length >= 3)
 */
class StrayNumber
{
    /**
     * @param array $arr
     * @return int
     */
    public static function execute(array $arr): int {
        $numCount = [];
        $result = 0;
        foreach($arr as $num) {
            if (false === isset($numCount[$num])) {
                $numCount[$num] = 1;
            } else {
                $numCount[$num]++;
            }
        }
        foreach($numCount as $num => $count) {
            foreach($numCount as $num2 => $count2) {
                if ($count > $count2) {
                    $result = $num2;
                }
            }
        }
        return $result;
    }
}
