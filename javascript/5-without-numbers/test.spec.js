"use strict";
const { assert } = require('chai');
const { unusualFive, } = require("./main");

describe("unusualFive", function(){
  it("should return 5", function(){
    assert.strictEqual(unusualFive(), 5);
  });
});