/*
  Reversed Sequence
  https://www.codewars.com/kata/5a00e05cc374cb34d100000d/train/typescript

  Build a function that returns an array of integers from n to 1 where n>0.

  Example : n=5 --> [5,4,3,2,1]
*/

/**
 * @param {number} n
 * @returns {number[]}
 */
export const reverseSeq = (n: number): number[] => {
  const result = [];
  for (let i = n; i > 0; i--) {
    result.push(i);
  }
  return result;
};