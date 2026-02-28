//! Switch it Up!

/// When provided with a number between 0-9, return it in words. Note that the input is guaranteed to be within the range of 0-9.
///
/// Input: 1
///
/// Output: "One".
///
/// If your language supports it, try using a switch statement.

pub fn switch_it_up(n: usize) -> &'static str {
    match n {
        0 => "Zero",
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine",
        10 => "Ten",
        _ => panic!("The given input should be between 0 - 10."),
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn basic() {
        assert_eq!(switch_it_up(1), "One");
        assert_eq!(switch_it_up(2), "Two");
        assert_eq!(switch_it_up(3), "Three");
    }
}

