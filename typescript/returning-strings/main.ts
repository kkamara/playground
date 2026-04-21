/*
  Returning Strings
  https://www.codewars.com/kata/55a70521798b14d4750000a4/train/typescript

  Create a function that accepts a parameter representing a name and returns the message: "Hello, <name> how are you doing today?".

  [Make sure you type the exact thing I wrote or the program may not execute properly]
*/

/**
 * @param {string} name 
 * @returns {string}
 */
export function greet(name: string): string {
  return `Hello, ${name} how are you doing today?`;
}