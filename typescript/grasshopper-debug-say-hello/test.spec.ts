import { assert } from "chai";
import { sayHello } from "./main";

describe("Basic tests", () => {
  it("Should pass basic tests", () => {
    assert.equal(sayHello('Mr. Spock'), 'Hello, Mr. Spock');
    assert.equal(sayHello('Captain Kirk'), 'Hello, Captain Kirk');
    assert.equal(sayHello('Liutenant Uhura'), 'Hello, Liutenant Uhura');
    assert.equal(sayHello('Dr. McCoy'), 'Hello, Dr. McCoy');
  });
});