pub fn smash(words: &[&str]) -> String {
    words.join(" ")
}

#[cfg(test)]
mod tests {
    use super::*;
    #[test]
    fn sample_tests() {
        assert_eq!(smash(&["hello"]), "hello".to_string());
        assert_eq!(smash(&["hello", "world"]), "hello world".to_string());
    }
}