"use strict";
/*
  Create a function that takes an integer as an
  argument and returns "Even" for even numbers
  or "Odd" for odd numbers.
*/

/**
 * @param {number} number 
 * @returns {string}
 */
function evenOrOdd(number) {
  if (Math.abs(number % 2) === 1) {
    return "Odd"
  }
  if (number % 2 === 0) {
    return "Even"
  }
}

module.exports = { evenOrOdd, };