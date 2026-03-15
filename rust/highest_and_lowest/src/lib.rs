//! Highest and Lowest

fn get_highest(numbers: &Vec<i32>) -> Option<i32> {
    let mut result: Option<i32> = None;
    for num in numbers {
        let mut current_is_highest = true;
        for num2 in numbers {
            if num < num2 {
                current_is_highest = false;
                break;
            }
        }
        if true == current_is_highest {
            result = Some(*num);
        }
    }
    result
}

fn get_lowest(numbers: &Vec<i32>) -> Option<i32> {
    let mut result: Option<i32> = None;
    for num in numbers {
        let mut current_is_lowest = true;
        for num2 in numbers {
            if num > num2 {
                current_is_lowest = false;
                break;
            }
        }
        if true == current_is_lowest {
            result = Some(*num);
        }
    }
    result
}

/// In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.
///
/// Examples
/// 
/// high_and_low("1 2 3 4 5") // return "5 1"
/// 
/// high_and_low("1 2 -3 4 5") // return "5 -3"
/// 
/// high_and_low("1 9 3 4 -5") // return "9 -5"
/// 
/// Notes
/// 
/// All numbers are valid Int32, no need to validate them.
/// 
/// There will always be at least one number in the input string.
/// 
/// Output string must be two numbers separated by a single space, and highest number is first.
pub fn high_and_low(numbers: &str) -> String {
    let numbers_array: Vec<i32> = numbers
        .split_whitespace()
        .map(|s| s.parse().unwrap())
        .collect();
    let lowest = get_lowest(&numbers_array);
    let highest = get_highest(&numbers_array);
    format!("{} {}", highest.unwrap(), lowest.unwrap())
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn example_test_1() {
        assert_eq!("42 -9", high_and_low("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));
    }

    #[test]
    fn example_test_2() {
        assert_eq!("3 1", high_and_low("1 2 3"));
    }
}
