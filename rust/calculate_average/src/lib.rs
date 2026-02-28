//! Calculate Average

/// Write a function which calculates the average of the numbers in a given array.
/// 
/// Note: Empty arrays should return 0.

pub fn find_average(slice: &[f64]) -> f64 {
    if 0 == slice.len() {
        return 0.0;
    }
    let mut res: f64 = 0.0;
    for num in slice {
        res += num;
    }
    res /= slice.len() as f64;
    res
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn example() {
        let input = [
            17.0, 16.0, 16.0, 16.0, 16.0, 15.0, 17.0, 17.0, 15.0, 5.0, 17.0, 17.0, 16.0,
        ];

        assert_eq!(
            find_average(&input),
            200.0 / 13.0,
        );

        assert_eq!(find_average(&[]), 0.0);
    }
}
