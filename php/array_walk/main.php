<?php
$myA = [
    "test" => [
        ["apple" => 1],
        ["apple" => 2],
        ["apple" => 3],
    ]
];

array_walk($myA["test"], function (&$v) {
    $v = $v["apple"];
});

var_dump($myA, $myA["test"][0]);
/*
    array(1) {
        ["test"]=>
        array(3) {
            [0]=>
            int(1)
            [1]=>
            int(2)
            [2]=>
            int(3)
        }
    }
    int(1)
*/;