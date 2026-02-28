"use strict";
/*
  Complete the function that takes two integers (a, b,
  where a < b) and return an array of all integers
  between the input parameters, including them.

  For example:

  a = 1
  b = 4
    --> [1, 2, 3, 4]
*/

/**
 * Note: I completed this challenge on first try.
 * @param {number} a
 * @param {number} b
 * @returns {Array<number>}
 */
function between(a, b) {
  let res = [];
  
  if (a > b) {
    for (let i = a; i >= b; i--) {
      res.push(i);
    }
  } else {
    for (let i = a; i <= b; i++) {
      res.push(i);
    }
  }
  
  return res;
}

module.exports = { between, };
