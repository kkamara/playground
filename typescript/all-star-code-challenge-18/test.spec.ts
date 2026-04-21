import { assert } from "chai";

import { strCount } from "./main";

describe("Sample Test Cases", function() {
  it("Testing for fixed test", () => {
    assert.strictEqual(strCount('Hello', 'o'), 1);
    assert.strictEqual(strCount('Hello', 'l'), 2);
    assert.strictEqual(strCount('',      'z'), 0);
  });
});