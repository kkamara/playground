import numberToString from './main';
import { expect } from "chai";

describe("numberToString", function() {
  it("should work correctly", () => {
    expect(numberToString(67)).to.equal('67');
  });
});