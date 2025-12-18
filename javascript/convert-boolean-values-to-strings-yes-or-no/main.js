"use strict";
/*
  Complete the method that takes a boolean value and return a
  "Yes" string for true, or a "No" string for false.
*/

/**
 * @param {boolean} n
 * @return string
 */
function boolToWord( bool ){
  switch(bool) {
    case true:
      return "Yes";
    break;
    case false:
      return "No";
    break;
  }
}

module.exports = { boolToWord, };
