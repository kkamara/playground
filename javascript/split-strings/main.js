"use strict";
/*
  Complete the solution so that it splits the string into pairs of two characters.
  If the string contains an odd number of characters then it should replace the
  missing second character of the final pair with an underscore ('_').

  Examples:

    * 'abc' =>  ['ab', 'c_']
    * 'abcdef' => ['ab', 'cd', 'ef']
*/

/**
 * @param {string} str
 * @return array
 */
function solution(str){
  let result = [];
  const arr = str.split("");
  let joinExisting = false;
  for (const char of arr) {
    if (joinExisting) {
      result[result.length - 1] += char;
      joinExisting = false;
    } else {
      result.push(char);
      joinExisting = true;
    }
  }
  if (0 < result.length && 1 === result[result.length - 1].length) {
    result[result.length - 1] += "_";
  }
  return result;
}

module.exports = { solution, };
