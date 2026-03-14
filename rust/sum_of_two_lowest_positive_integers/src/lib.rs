//! Sum of Two Lowest Positive Integers

fn should_skip(number: &u32, query: Option<u32>) -> bool {
    let mut result = false;
    if let Some(skip_num) = query {
        if number == &skip_num {
            println!("Skipping {number}");
            result = true;
        }
    }
    result
}

fn get_smallest_num(numbers: &[u32], number_to_skip: Option<u32>) -> u32 {
    let mut result: u32 = 0;
    println!("Iterating over {numbers:?}");
    for num in numbers {
        if should_skip(&num, number_to_skip) {
            continue;
        }
        println!("Checking {num}");
        let mut current_is_lowest = true;
        for num2 in numbers {
            if should_skip(&num2, number_to_skip) {
                continue;
            }
            if num > num2 {
                println!("{} > {}", num, num2);
                current_is_lowest = false;
                break;
            }
        }
        if true == current_is_lowest {
            result = *num;
        }
    }
    println!("Returning {result}");
    result
}

/// Create a function that returns the sum of the two lowest positive numbers given an array of minimum 4 positive integers. No floats or non-positive integers will be passed.
/// 
/// For example, when an array is passed like [19, 5, 42, 2, 77], the output should be 7.
/// 
/// [10, 343445353, 3453445, 3453545353453] should return 3453455.
pub fn sum_two_smallest_numbers(numbers: &[u32]) -> u32 {
    let mut lowest = Vec::new();
    
    lowest.push(get_smallest_num(&numbers, None));
    let second = get_smallest_num(&numbers, Some(lowest[0]));
    if 0 != second {
        lowest.push(second);
    }
    // Check if lowest number occurs more than once.
    let mut occurrences = Vec::new();
    for num in numbers {
        if lowest[0] == *num {
            occurrences.push(*num);
        }
    }
    if 1 < occurrences.len() && 2 == lowest.len() {
        lowest[1] = occurrences[0];
    }
    // Check if lowest number is a duplicate.
    if 1 == lowest.len() {
        lowest.push(lowest[0]);
    }
    println!("{lowest:?}");
    lowest[0] + lowest[1]
}

#[cfg(test)]
mod tests {
    use super::*;
    
    #[test]
    fn sample_tests() {
        assert_eq!(sum_two_smallest_numbers(&[5, 8, 12, 19, 22]),  13, "Incorrect result for [5, 8, 12, 19, 22]");
        assert_eq!(sum_two_smallest_numbers(&[15, 28, 4, 2, 43]), 6, "Incorrect result for [15, 28, 4, 2, 43]");
        assert_eq!(sum_two_smallest_numbers(&[23, 71, 33, 82, 1]), 24, "Incorrect result for [23, 71, 33, 82, 1]");
        assert_eq!(sum_two_smallest_numbers(&[52, 76, 14, 12, 4]), 16, "Incorrect result for [52, 76, 14, 12, 4]");
        assert_eq!(sum_two_smallest_numbers(&[1, 1, 5, 5]),  2, "Incorrect result for [1, 1, 5, 5]");
    }
}
