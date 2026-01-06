/*
    https://www.codewars.com/kata/57f781872e3d8ca2a000007e/train/kotlin
    Given an array of integers, return a new array with each value doubled.
    For example:
        [1, 2, 3] --> [2, 4, 6]
 */
fun maps(x: IntArray): IntArray {
    val result = mutableListOf<Int>()
    for (i in x) {
        result.add(i + i)
    }
    return result.toIntArray()
}