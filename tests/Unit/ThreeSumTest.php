<?php

namespace Tests\Unit;

use Algo\Basic\ThreeSum;

test('Three sum algorithm', function () {
    $nums = [12, 3, 1, 2, -6, 5, -8, 6];
    $target = 0;
    $results = new ThreeSum()->handle($nums, $target);

    foreach ($results as $result) {
        $sum = array_sum($result);
        expect($sum)->toBe($target);
    }
});