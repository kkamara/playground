//! Beginner - Reduce but Grow

/// Given a non-empty array of integers, return the result of multiplying the values together in order. Example:
///
/// [1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24

pub fn grow(nums: Vec<i32>) -> i32 {
    let mut res = 0;
    for (i, num) in nums.iter().enumerate() {
        if 0 == i{
            res = *num;
        } else {
            res *= *num;
        }
    }
    res
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn basic_test() {
        assert_eq!(grow(vec![1, 2, 3]), 6);
        assert_eq!(grow(vec![4, 1, 1, 1, 4]), 16);
        assert_eq!(grow(vec![2, 2, 2, 2, 2, 2]), 64);
    }
}
