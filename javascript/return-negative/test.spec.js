"use strict";
const { assert, } = require('chai');
const { makeNegative, } = require("./main");

describe("Tests", () => {
  it("test", () => {
     assert.strictEqual(makeNegative(42), -42);
  });
});