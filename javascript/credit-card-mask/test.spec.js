"use strict";
require("chai").should();
require("mocha");

const { maskify, } = require("./main");

let res;

describe("Main tests:", () => {
  it("should work for some examples", () => {
    res = maskify("4556364607935616");
    res.should.equal("############5616");

    res = maskify("1");
    res.should.equal("1");

    res = maskify("11111");
    res.should.equal("#1111");
  });
});
