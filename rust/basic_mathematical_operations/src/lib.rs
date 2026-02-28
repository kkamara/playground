//! Basic Mathematical Operations

/// Your task is to create a function that does four basic mathematical operations.
///
/// The function should take three arguments - operation(string/char), value1(number), value2(number).
/// 
/// The function should return result of numbers after applying the chosen operation.
///
/// Examples(Operator, value1, value2) --> output
/// 
/// ('+', 4, 7) --> 11
/// 
/// ('-', 15, 18) --> -3
/// 
/// ('*', 5, 5) --> 25
/// 
/// ('/', 49, 7) --> 7

pub fn basic_op(operator: char, value1: i32, value2: i32) -> i32 {
    match operator {
        '+' => value1 + value2,
        '-' => value1 - value2,
        '*' => value1 * value2,
        '/' => value1 / value2,
        _ => panic!("Operator not accounted for."),
    }
}

#[cfg(test)]
mod tests {
    use super::basic_op;

    fn dotest(op: char, v1: i32, v2: i32, expected: i32) {
        let actual = basic_op(op, v1, v2);
        assert!(actual == expected, 
            "With operator = '{op}', value1 = {v1}, value2 = {v2}\nExpected {expected} but got {actual}")
    }
    
    #[test]
    fn example_tests() {
        dotest('+', 4, 7, 11);
        dotest('-', 15, 18, -3);
        dotest('*', 5, 5, 25);
        dotest('/', 49, 7, 7);
    }
    
    
}
