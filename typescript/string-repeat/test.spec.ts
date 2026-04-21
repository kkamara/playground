import solution = require('./main');

import {assert} from "chai";

describe("solution", function(){
  it("Tests", function(){
    assert.equal(solution.repeatStr(3, "*"), "***");
    assert.equal(solution.repeatStr(5, "#"), "#####");
    assert.equal(solution.repeatStr(2, "ha "), "ha ha ");
    assert.equal(solution.repeatStr(0, "qwerty"), "");
    assert.equal(solution.repeatStr(0, ""), "");
    assert.equal(solution.repeatStr(5, ""), "");
    assert.equal(solution.repeatStr(6, "I"), "IIIIII");
    assert.equal(solution.repeatStr(5, "Hello"), "HelloHelloHelloHelloHello");
  });
});