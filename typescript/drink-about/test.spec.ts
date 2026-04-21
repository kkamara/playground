import { assert } from "chai";
import { peopleWithAgeDrink } from "./main";

describe("Basic tests", () => {
  it("Testing for fixed tests", () => {
    assert.strictEqual(peopleWithAgeDrink(13), 'drink toddy');
    assert.strictEqual(peopleWithAgeDrink(17), 'drink coke');
    assert.strictEqual(peopleWithAgeDrink(18), 'drink beer');
    assert.strictEqual(peopleWithAgeDrink(20), 'drink beer');
    assert.strictEqual(peopleWithAgeDrink(30), 'drink whisky');
  });
});
