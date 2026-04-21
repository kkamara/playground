import { assert } from "chai";
import { greet } from "./main";

describe("Basic tests", () => {
  it("Should pass basic tests", () => {
    assert.equal(greet("Ryan"), "Hello, Ryan how are you doing today?");
    assert.equal(greet("Shingles"), "Hello, Shingles how are you doing today?");
  });
});