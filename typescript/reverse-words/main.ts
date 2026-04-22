/*
  Reverse words
  https://www.codewars.com/kata/5259b20d6021e9e14c0010d4/train/typescript/69b6667ab798e8f030639a07

  Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.

  Examples
    "This is an example!" ==> "sihT si na !elpmaxe"
    "double  spaces"      ==> "elbuod  secaps"
*/

/**
 * @param {string} str
 * @returns {string}
 */
export function reverseWords(str: string): string {
  let result = [];
  
  for (const word of str.split(" ")) {
    result.push(
      word.split("").reverse().join("")
    );
  }
  
  return result.join(" ");
}