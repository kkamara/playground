/*
  The main idea is to count all the occurring characters in a string.
  If you have a string like aba, then the result should be {'a': 2, 'b': 1}.

  What if the string is empty? Then the result should be empty object
  literal, {}.
*/

/**
 * @param {string} string
 * @return object
 */
function count(string) {
  const result = {};
  const splitInput = string.split("");
  for (const char of splitInput) {
    if (Object.keys(result).includes(char)) {
      result[char] += 1;
    } else {
      result[char] = 1;
    }
  }
  return result;
}

module.exports = { count, };
