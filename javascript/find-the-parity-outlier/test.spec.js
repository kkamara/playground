require("chai").should();
require("mocha");

const { findOutlier, } = require("./main");

let res;

describe("Main tests:", () => {
  it("test", () => {
    res = findOutlier([0, 1, 2]);
    res.should.equal(1);

    res = findOutlier([1, 2, 3]);
    res.should.equal(2);

    res = findOutlier([2,6,8,10,3]);
    res.should.equal(3);

    res = findOutlier([0,0,3,0,0]);
    res.should.equal(3);

    res = findOutlier([1,1,0,1,1]);
    res.should.equal(0);
  });
});
