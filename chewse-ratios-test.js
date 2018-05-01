   /**
    * Qunit Test Case 
    * @param object map
    * @param int portions
    *  
    */

  QUnit.test('getMealRatios', function( assert ) {
    assert.deepEqual(getMealRatios({1:2,2:4,3:5}, 5), {1: 2, 2:2, 3: 1});
    assert.deepEqual(getMealRatios({1:1}, 2), {1:2});
    assert.deepEqual(getMealRatios({1: 1}, 0), {1: 0});
    assert.deepEqual(getMealRatios({1: 1, 2:1, 3:1},  11), {1: 4, 2: 4, 3: 3});
  });