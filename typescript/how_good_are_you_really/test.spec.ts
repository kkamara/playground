import betterThanAverage from "./main";
import { assert } from "chai";

describe("Basic tests", () => {
  it("betterThanAverage([2, 3], 5)", () => assert.isTrue(betterThanAverage([2, 3], 5)));
  it("betterThanAverage([100, 40, 34, 57, 29, 72, 57, 88], 75)", () => assert.isTrue(betterThanAverage([100, 40, 34, 57, 29, 72, 57, 88], 75)));
  it("betterThanAverage([12, 23, 34, 45, 56, 67, 78, 89, 90], 69)", () => assert.isTrue(betterThanAverage([12, 23, 34, 45, 56, 67, 78, 89, 90], 69)));
  it("betterThanAverage([41, 75, 72, 56, 80, 82, 81, 33], 50)", () => assert.isFalse(betterThanAverage([41, 75, 72, 56, 80, 82, 81, 33], 50)));
  it("betterThanAverage([29, 55, 74, 60, 11, 90, 67, 28], 21)", () => assert.isFalse(betterThanAverage([29, 55, 74, 60, 11, 90, 67, 28], 21)));
});