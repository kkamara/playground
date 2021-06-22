<?php

namespace App;
/**
    Given two arrays of strings a1 and a2 return a sorted array r in lexicographical order 
    of the strings of a1 which are substrings of strings of a2.

    #Example 1: a1 = ["arp", "live", "strong"]

    a2 = ["lively", "alive", "harp", "sharp", "armstrong"]

    returns ["arp", "live", "strong"]

    #Example 2: a1 = ["tarp", "mice", "bull"]

    a2 = ["lively", "alive", "harp", "sharp", "armstrong"]

    returns []
 */
class WhichAreIn
{
    public function inArray($a1, $a2) {
        $r = [];
        foreach($a1 as $f1) {
            foreach($a2 as $f2) {
                 if(FALSE !== (bool)preg_match(sprintf("/%s/",$f1), $f2)) {
                     $r[] = $f1;
                     break;
                 }
            }
        }
        sort($r);
        
        return $r;
    }
}
