/// Sentence Smash
/// 
/// Write a function that takes an array of words and smashes them together into a sentence and returns the sentence. You can ignore any need to sanitize words or add punctuation, but you should add spaces between each word. Be careful, there shouldn"t be a space at the beginning or the end of the sentence!
///
/// Example
/// 
/// ["hello", "world", "this", "is", "great"]  =>  "hello world this is great"

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