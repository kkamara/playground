"use strict";
/*
  Given a set of numbers, return the additive inverse of
  each. Each positive becomes negatives, and the negatives
  become positives.

  [1, 2, 3, 4, 5] --> [-1, -2, -3, -4, -5]
  [1, -2, 3, -4, 5] --> [-1, 2, -3, 4, -5]
  [] --> []
  You can assume that all values are integers. Do not mutate
  the input array.
*/

function invert(array) {
  const res = [];
  for (const item of array) {
    if (0 < item) {
      res.push(Number(`-${item}`))
    } else {
      res.push(Math.abs(item))
    }
  }
  return res;
}

module.exports = { invert, };