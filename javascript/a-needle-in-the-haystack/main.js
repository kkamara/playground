"use strict";
/*
  Can you find the needle in the haystack?

  Write a function findNeedle() that takes an array full of junk but containing one "needle"

  After your function finds the needle it should return a message (as a string) that says:

  "found the needle at position " plus the index it found the needle, so:

  Example(Input --> Output)

    ["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"] --> "found the needle at position 5" 
  Note: In COBOL, it should return "found the needle at position 6"
*/

/**
 * @param {array} haystack
 * @return string
 */
function findNeedle(haystack) {
  let result = "found the needle at position ";
  let needleIndex = 0;
  for(const index in haystack) {
    const value = haystack[index];
    if ("needle" === value) {
      needleIndex = index;
      break;
    }
  }
  result += needleIndex;
  return result;
}

module.exports = { findNeedle, };
