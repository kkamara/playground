/*
  Given a random non-negative number, you have to return the
  digits of this number within an array in reverse order.

  Example (Input => Output):
    35231 => [1,3,2,5,3]
    0     => [0]
*/

/**
 * @param {number} n
 * @return array
 */
function digitize(n) {
  let result = [];
  for (const num of `${n}`.split("").reverse()) {
    result.push(Number.parseInt(num));
  }
  return result;
}

module.exports = { digitize, };
