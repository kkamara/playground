require("mocha");

const { templateLiteral } = require("./main");

let str, source, res, expectedResult;

describe("Main test:", () => {
  it("should parse simple template", done => {
    str = "hello {{ my.val }}";
    source = {
      my: {
        val: "world"
      }
    };
    res = templateLiteral(str, source);
    expectedResult = "hello world";
    if (res !== expectedResult) throw new Error("wrong value", expectedResult);
    done();
  });

  it("should parse multiple values", done => {
    str = "{{ a.one }}, {{ a.two }}, {{ a.three }}";
    source = {
      a: {
        one: "foo",
        two: "bar",
        three: "baz"
      }
    };
    res = templateLiteral(str, source);
    expectedResult = "foo, bar, baz";
    if (res !== expectedResult) throw new Error("wrong value", expectedResult);
    done();
  });

  it("should parse values of different types", done => {
    str = "{{ a.one }}, {{ a.two }}, {{ a.three }}";
    source = {
      a: {
        one: "foo",
        two: 52,
        three: false
      }
    };
    res = templateLiteral(str, source);
    expectedResult = "foo, 52, false";
    if (res !== expectedResult)
      throw new Error("wrong value, expected", expectedResult);
    done();
  });

  it("should error on values that don't exist", done => {
    str = "{{ a.one }}, {{ a.two }}, {{ a.three }}";
    source = {
      a: {
        one: "foo",
        two: 52
      }
    };
    try {
      res = templateLiteral(str, source);
      throw new Error("func should error", res);
    } catch (e) {
      expectedMsg = "{{ a.three }} does not exist in source";
      if (e.message !== expectedMsg)
        throw new Error("wrong error message, expected: ", expectedMsg);
      done();
    }
  });

  it("should error on invalid template", done => {
    str = "{{ a.one }}, {{ a.tw1o }}";
    source = {
      a: {
        one: "foo",
        two: 52
      }
    };
    try {
      res = templateLiteral(str, source);
      console.log(res);
      throw new Error("func should error", res);
    } catch (e) {
      expectedMsg = "{{ a.tw1o }} does not exist in source";
      if (e.message !== expectedMsg)
        throw new Error("wrong error message, expected: ", expectedMsg);
      done();
    }
  });
});
