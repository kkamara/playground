//! Volume of a Cuboid
 
/// Bob needs a fast way to calculate the volume of a rectangular cuboid with three values: the length, width and height of the cuboid.
///
/// Write a function to help Bob with this calculation.

pub fn get_volume_of_cuboid(length: f64, width: f64, height: f64) -> f64 {
    length * width * height
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_add() {
        assert_eq!(get_volume_of_cuboid(1.0, 2.0, 2.0), 4.0);
        assert_eq!(get_volume_of_cuboid(6.3, 2.0, 5.0), 63.0);
    }
}
