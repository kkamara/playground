package solution

/*
    Complete the square sum function so that it squares
    each number passed into it and then sums the results
    together.

    For example, for [1, 2, 2] it should return 9 because
    1^2 + 2^2 + 2^2 = 9 .
 */

fun squareSum(n: Array<Int>): Int {
    var result = 0
    for (i in n) {
        result += i * i
    }
    return result
}