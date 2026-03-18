/*
  Grasshopper - Personalized Message
  https://www.codewars.com/kata/5772da22b89313a4d50012f

  Create a function that gives a personalized greeting. This function takes two parameters: name and owner.

  Use conditionals to return the proper message:

  case	              return
  name equals owner	  'Hello boss'
  otherwise	          'Hello guest'
*/

/*
 * @param {string} name
 * @param {string} owner
 * @returns {string}
 */
export default function greet(name: string, owner: string): string{
  let title = "";
  if (name === owner) {
    title = "boss";
  } else {
    title = "guest";
  }
  return `Hello ${title}`;
}
