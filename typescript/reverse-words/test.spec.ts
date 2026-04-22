import { assert, config } from "chai";
import { reverseWords } from "./main";

config.truncateThreshold = 0;

describe("Sample Test Cases", function(){
  it("Should return a proper value", function() {
    assert.strictEqual(reverseWords('The quick brown fox jumps over the lazy dog.'), 'ehT kciuq nworb xof spmuj revo eht yzal .god', "Input: 'The quick brown fox jumps over the lazy dog.'");
    assert.strictEqual(reverseWords('apple'), 'elppa', "Input: 'apple'");
    assert.strictEqual(reverseWords('a b c d'), 'a b c d', "Input: 'a b c d'");
    assert.strictEqual(reverseWords('  double  spaced  words  '), '  elbuod  decaps  sdrow  ', "Input: '  double  spaced  words  '");
  });
});