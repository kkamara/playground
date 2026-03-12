import { solution } from "./main";
import { assert } from "chai";

describe("Sample Test Cases", function(){
  it("Should return a string", function() {
    assert.equal(solution("world"), "dlrow");
    assert.equal(solution("hello"), "olleh");
    assert.equal(solution(""), "");
    assert.equal(solution("h"), "h");
  });
});