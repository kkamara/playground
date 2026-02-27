"use strict";
const { assert } = require('chai');
const { between, } = require("./main");

describe("Basic tests", () => {
  it("between(1, 4)", () => assert.deepStrictEqual(between(1, 4), [1, 2, 3, 4]));
  it("between(-2, 2)", () => assert.deepStrictEqual(between(-2, 2), [-2, -1, 0, 1, 2]));
});