package solution

/*
    https://www.codewars.com/kata/55a2d7ebe362935a210000b2/train/kotlin
    Given an array of integers your solution should find the smallest integer.

    For example:

    Given [34, 15, 88, 2] your solution will return 2
    Given [34, -345, -1, 100] your solution will return -345
    You can assume, for the purpose of this kata, that the supplied array will
    not be empty.
 */

class SmallestIntegerFinder {

    fun findSmallestInt(nums: List<Int>): Int {
        var result = nums[0]
        for (num in nums) {
            if (result > num) {
                result = num
            }
        }
        return result
    }

}