// __mealRatios({}, 1) —> {}
// __mealRatios({1: 1}, 2) —> {1:2}
// __mealRatios({1: 1}, 0) —> {1: 0}
// __mealRatios({1: 1, 2:1, 3:1},  11) —> {1: 4, 2: 4, 3: 3}
(function($) {

    'use strict';

            // call method
            var $ratio = getMealRatios({
                1: 2,
                2: 4,
                3: 5
            }, 5);
            
            console.log($ratio);

            function getMealRatios(map, portions) {

                // Base Case: 
                // Choose largest integer for non-integer portion counts 
                // When map is empty return empty {}
                // When portions are empty set every key's value to 0 and return {}
                var numKeys = Object.keys(map).length;
                var sqrtPortions = Math.floor(Math.sqrt(portions));
                var dividedPortions = new Array(numKeys);
                var portionsObj = {};

                if ($.isEmptyObject(map)) {
                    console.log("map is empty");
                    return {};
                }

                if ($.isNumeric(portions)) {
                    portions = Math.ceil(portions);
                } else {
                    // case if given a non-numeric value
                    portions = 0;
                }

                // divide the array into equal parts to start 
                var parts = Math.floor((portions / numKeys));

                // fill the portions array with divided portions
                dividedPortions.fill(parts, 0, numKeys);

                for (var i = 0; i < dividedPortions.length; i++) {
                    // set the sum of array values 
                    var sum = dividedPortions.reduce(getSum);
                    // break loop once we find the sum equaling portions
                    if (sum == portions) {

                        break;

                    } else if (sum > portions) {

                        break;

                    } else {

                        dividedPortions[i] += 1;
                    }
                }
                // package back into original data type
                $.each(dividedPortions, function(index, value) {
                    //console.log("div index " + dividedPortions[index]);
                    portionsObj[index] = dividedPortions[index];

                });

                 // helper method to calculate the sum of array 
                function getSum(total, num) {
                    return total + num;
                }

                return portionsObj;

            }

})(jQuery);