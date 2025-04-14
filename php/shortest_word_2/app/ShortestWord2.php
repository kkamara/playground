<?php

namespace App;

/**
    Simple, given a string of words, return the length of the shortest word(s).

    String will never be empty and you do not need to account for different data types.
 */
class ShortestWord2
{
    /**
     * @param string $str
     * @return int
     */
    public static function execute(string $str): int {
        $result = 0;
        $strArr = explode(" ", $str);
        foreach($strArr as $word) {
            if (0 === $result) {
                $result = strlen($word);
            } else {
                if (strlen($word) < $result) {
                    $result = strlen($word);
                }
            }
        }
        return $result;
    }
}

