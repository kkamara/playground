const { assert, config, } = require('chai');
require("./main");

describe("Tests", () => {
  config.truncateThreshold = 0;

  function doTest(input, expected) {
    const actual = input.toJadenCase();
    assert.strictEqual(actual, expected, `for string "${input}"\n`);
  }

  it('should extend the string prototype', function() {
    assert.property(String.prototype, 'toJadenCase', 'String.prototype should have a toJadenCase property');
    assert.typeOf(String.prototype.toJadenCase, 'function', 'toJadenCase() should be a function');
  });

  it("sample tests", () => {
    doTest("most trees are blue", "Most Trees Are Blue");
    doTest("How can mirrors be real if our eyes aren't real", "How Can Mirrors Be Real If Our Eyes Aren't Real");
  });
});