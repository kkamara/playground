package solution

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