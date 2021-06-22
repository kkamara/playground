<?php

namespace App;

/**
    Simple, given a string of words, return the length of the shortest word(s).

    String will never be empty and you do not need to account for different data types.
 */
class ShortestWord
{
    function findShort($str){
        $words = explode(" ", $str);
        $shortest = strlen($words[0]);
        for($i=0;$i<count($words);$i++) {
            if($shortest > strlen($words[$i])) {
                $shortest = strlen($words[$i]);
            }
        }
        return $shortest;
    }
}

