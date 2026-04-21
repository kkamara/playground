import { min, max } from './main';
import { assert } from 'chai';

describe("Example Tests", function(){
  it("min", function(){
    assert.strictEqual(min([-52, 56, 30, 29, -54, 0, -110]), -110);
    assert.strictEqual(min([42, 54, 65, 87, 0]), 0);
  });
  
  it("max", function(){
    assert.strictEqual(max([4,6,2,1,9,63,-134,566]), 566);
    assert.strictEqual(max([5]), 5);
  });
});
