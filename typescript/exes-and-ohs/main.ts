/*
  Exes and Ohs
  https://www.codewars.com/kata/55908aad6620c066bc00002a/train/typescript

  Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

  Examples input/output:
    XO("ooxx") => true
    XO("xooxx") => false
    XO("ooxXm") => true
    XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
    XO("zzoo") => false
*/

/**
 * @param {string} str
 * @returns {boolean}
 */
export function xo(str: string) : boolean {
  const cache = { xCount: 0, oCount: 0 };
  
  for (const char of str) {
    const lowerCaseChar = char.toLowerCase();
    if (
      "o" === lowerCaseChar ||
      "x" === lowerCaseChar
    ) {
      if ("o" === lowerCaseChar) {
        cache.oCount++;
      } else if ("x" === lowerCaseChar) {
        cache.xCount++;
      }
    }
  }
  
  return cache.xCount === cache.oCount;
}