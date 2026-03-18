/*
  Grasshopper - Grade book
  https://www.codewars.com/kata/55cbd4ba903825f7970000f5

  Complete the function so that it finds the average of the three scores passed to it and returns the letter value associated with that grade.

  Numerical Score	Letter Grade
  90 <= score <= 100	'A'
  80 <= score < 90	'B'
  70 <= score < 80	'C'
  60 <= score < 70	'D'
  0 <= score < 60	'F'
  
  Tested values are all between 0 and 100. Theres is no need to check for negative values or values greater than 100.
*/

/**
 * @param {number} a
 * @param {number} b
 * @param {number} c
 * @returns {string}
 */
export default function getGrade(a: number, b: number, c: number): string {
  let result = null;
  const average = (a + b + c) / 3;
  if (90 <= average) {
    result = "A";
  } else if (80 <= average) {
    result = "B";
  } else if (70 <= average) {
    result = "C";
  } else if (60 <= average) {
    result = "D";
  } else {
    result = "F";
  }
  return result;
}