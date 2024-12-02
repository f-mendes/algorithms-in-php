<?php
declare(strict_types=1);

namespace Algo\Basic;

class TwoSum
{
    public function handle(array $nums, int $target): array
    {
        return $this->solutionTwo($nums, $target);
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
    private function solutionTwo(array $nums, int $target): array //O(n)
    {
        $seen = [];
        foreach ($nums as $value) {
            $complement = $target - $value;
            if (in_array($complement, $seen)) {
                return [$complement, $value];
            }
            $seen[] = $value;
        }

        return [];
    }
}
