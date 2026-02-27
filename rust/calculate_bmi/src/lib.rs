/// Calculate BMI
/// 
/// Write function bmi that calculates body mass index (bmi = weight / height2).
/// 
/// if bmi <= 18.5 return "Underweight"
/// 
/// if bmi <= 25.0 return "Normal"
/// 
/// if bmi <= 30.0 return "Overweight"
/// 
/// if bmi > 30 return "Obese"

pub fn bmi(weight: u32, height: f32) -> &'static str {
    let bmi = weight as f32 / (height * height);

    if bmi <= 18.5 {
        "Underweight"
    } else if bmi <= 25.0 {
        "Normal"
    } else if bmi <= 30.0 {
        "Overweight"
    } else {
        "Obese"
    }
}

#[cfg(test)]
mod tests {
    use super::*;
    
    #[test]
    fn basic_tests() {
        assert_eq!(bmi(50, 1.80), "Underweight");
        assert_eq!(bmi(80, 1.80), "Normal");
        assert_eq!(bmi(90, 1.80), "Overweight");
        assert_eq!(bmi(110, 1.80), "Obese");
    }
}