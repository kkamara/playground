/*
  Drink About
  https://www.codewars.com/kata/56170e844da7c6f647000063/train/typescript

  Kids drink toddy.
  Teens drink coke.
  Young adults drink beer.
  Adults drink whisky.
  Make a function that receive age, and return what they drink.

  Rules:
    Children under 14 old.
    Teens under 18 old.
    Young under 21 old.
    Adults have 21 or more.

  Examples: (Input --> Output)
    13 --> "drink toddy"
    17 --> "drink coke"
    18 --> "drink beer"
    20 --> "drink beer"
    30 --> "drink whisky"
*/

/**
 * @param {number} old
 * @returns {string}
 */
export function peopleWithAgeDrink(old: number): string {
  let result = "drink ";
  if (14 > old) {
    result += "toddy";
  } else if (18 > old) {
    result += "coke";
  } else if (21 > old) {
    result += "beer";
  } else if (21 <= old) {
    result += "whisky";
  }
  return result;
}
