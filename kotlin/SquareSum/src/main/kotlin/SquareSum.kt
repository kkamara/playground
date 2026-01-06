package com.kelvinkamara

fun squareSum(n: Array<Int>): Int {
    var result = 0
    for (i in n) {
        result += i * i
    }
    return result
}