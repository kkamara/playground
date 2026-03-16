/*
  https://www.codewars.com/kata/5168bb5dfe9a00b126000018

  Complete the solution so that it reverses the string passed into it.

  'world'  =>  'dlrow'
  'word'   =>  'drow'
*/

/**
 * @param {string} str 
 * @returns {string}
 */
export function solution(str: string): string {
  let newArr = [];
  for (let i = str.length; i > -1; i--) {
    newArr.push(str[i])
  }
  return newArr.join("");
}
