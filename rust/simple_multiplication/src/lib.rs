//! Simple Multiplication

/// This kata is about multiplying a given number by eight if it is an even number and by nine otherwise.

pub fn simple_multiplication(number: u8) -> u8 {
    match number % 2 {
        0 => 8 * number,
        1 => 9 * number,
        _ => unreachable!(),
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_basic() {
        assert_eq!(simple_multiplication(1), 9);
        assert_eq!(simple_multiplication(2), 16);
        assert_eq!(simple_multiplication(4), 32);
        assert_eq!(simple_multiplication(5), 45);
    }
}
