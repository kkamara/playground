<?php

namespace App;

/**
 * Return the number (count) of vowels in the given string.
 *
 * We will consider a, e, i, o, u as vowels for this Kata (but not y).
 *
 * The input string will only consist of lower case letters and/or spaces.
 */
class VowelCount
{
    /**
     * @param string $str
     */
    public static function execute(string $str): int
    {
        $lookUp = ["a", "e", "i", "o", "u"];
        $result = 0;
        for($i=0; $i < strlen($str); $i++) {
            foreach($lookUp as $lookUpChar) {
                if ($str[$i] === $lookUpChar) {
                    $result++;
                }
            }
        }
        return $result;
    }
}
