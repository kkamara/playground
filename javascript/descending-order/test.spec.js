"use strict";
require("chai").should();
require("mocha");

const { descendingOrder } = require("./main");

let res;

describe("Main tests:", () => {
  it("should complete standard tests", () => {
    res = descendingOrder(0);
    res.should.equal(0);

    res = descendingOrder(1);
    res.should.equal(1);

    res = descendingOrder(123456789);
    res.should.equal(987654321);
  });
});
