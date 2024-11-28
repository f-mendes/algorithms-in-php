<?php
declare(strict_types=1);

namespace Algo\Basic;

class TwoSum
{
    public function handler(array $nums, int $target): array
    {
        return $this->solutionOne($nums, $target);
    }

    private function solutionOne(array $nums, int $target): array //n log n
    {
        sort($nums);
        $left = 0;
        $right = count($nums) - 1;
        while ($left < $right) {
            $sum = $nums[$left] + $nums[$right];
            if ($sum === $target){
                return [$nums[$left], $nums[$right]];
            }
            if ($sum < $target) {
                $left++;
            }
            if ($sum > $target) {
                $right--;
            }
        }
        return [];
    }
}
