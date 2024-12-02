<?php

namespace Tests\Unit;

use Algo\Basic\TwoSum;

test('two sum algorithm', function () {
    $target = 9 ;
    $nums = [4, 1, 2, -2, 11, 15, 1, -1, -6, -4];
    $result = new TwoSum()->handle($nums, $target);
    $sum = array_sum($result);
    expect($sum)->toBe($target);
});
