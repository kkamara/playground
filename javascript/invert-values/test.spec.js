"use strict";
const { assert, config, } = require('chai');
const { invert, } = require("./main");

config.truncateThreshold=0;

describe("Invert array values",() => {
  const norm = arr => arr.map(n => n === -0 ? 0 : n);
  it("Basic Tests", () => {
    assert.deepEqual(norm(invert([1,2,3,4,5])), [-1,-2,-3,-4,-5]);
    assert.deepEqual(norm(invert([1,-2,3,-4,5])), [-1,2,-3,4,-5]);
    assert.deepEqual(norm(invert([])), []);
    assert.deepEqual(norm(invert([0])), [0]);
  });
});