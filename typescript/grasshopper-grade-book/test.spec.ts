import { assert } from "chai";
import getGrade from "./main";

describe('should return an A', function () {
  it("getGrade(95, 90, 93)", () => assert.strictEqual(getGrade(95, 90, 93), 'A'));
  it("getGrade(100, 85, 96)", () => assert.strictEqual(getGrade(100, 85, 96), 'A'));
  it("getGrade(92, 93, 94)", () => assert.strictEqual(getGrade(92, 93, 94), 'A'));
  it("getGrade(100, 100, 100)", () => assert.strictEqual(getGrade(100, 100, 100), 'A'));
});
describe('should return a B', function () {
  it("getGrade(70, 70, 100)", () => assert.strictEqual(getGrade(70, 70, 100), 'B'));
  it("getGrade(82, 85, 87)", () => assert.strictEqual(getGrade(82, 85, 87), 'B'));
  it("getGrade(84, 79, 85)", () => assert.strictEqual(getGrade(84, 79, 85), 'B'));
});
describe('should return a C', function () {
  it("getGrade(70, 70, 70)", () => assert.strictEqual(getGrade(70, 70, 70), 'C'));
  it("getGrade(75, 70, 79)", () => assert.strictEqual(getGrade(75, 70, 79), 'C'));
  it("getGrade(60, 82, 76)", () => assert.strictEqual(getGrade(60, 82, 76), 'C'));
});
describe('should return a D', function () {
  it("getGrade(65, 70, 59)", () => assert.strictEqual(getGrade(65, 70, 59), 'D'));
  it("getGrade(66, 62, 68)", () => assert.strictEqual(getGrade(66, 62, 68), 'D'));
  it("getGrade(58, 62, 70)", () => assert.strictEqual(getGrade(58, 62, 70), 'D'));
});
describe('should return an F', function () {
  it("getGrade(44, 55, 52)", () => assert.strictEqual(getGrade(44, 55, 52), 'F'));
  it("getGrade(48, 55, 52)", () => assert.strictEqual(getGrade(48, 55, 52), 'F'));
  it("getGrade(58, 59, 60)", () => assert.strictEqual(getGrade(58, 59, 60), 'F'));
  it("getGrade(0, 0, 0)", () => assert.strictEqual(getGrade(0, 0, 0), 'F'));
});