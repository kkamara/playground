"use strict";
require("chai").should();
require("mocha");

const { createPhoneNumber, } = require("./main");

let res;

describe("Main tests:", () => {
  it("Fixed tests", () => {
    res = createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]);
    res.should.equal("(123) 456-7890");

    res = createPhoneNumber([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]);
    res.should.equal("(111) 111-1111");

    res = createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]);
    res.should.equal("(123) 456-7890");
  });
});
