<?php

namespace Algo\Basic;

class ThreeSum
{
    public function handle(array $nums, int $target): array
    {
        return $this->solutionTwo($nums, $target);
    }
    private function solutionTwo(array $nums, int $target): array //O(n2)
    {
        $result = [];
        sort($nums);

        foreach ($nums as $key => $num) {
            $left = $key + 1;
            $right = count($nums) - 1;
            while ($left < $right) {
                $sum = $num + $nums[$left] + $nums[$right];

                if ($sum < $target) {
                    $left++;
                } elseif ($sum > $target) {
                    $right--;
                } else {
                    $result[] = [$num, $nums[$left], $nums[$right]];
                    $left++;
                    $right--;
                }
            }
        }
        return $result;
    }
    private function solutionOne(array $nums, int $target): array //O(n3)
    {
        $result = [];
        for ($i=0; $i < count($nums) - 2; $i++){
            $current_i = $nums[$i];
            for ($j=$i; $j < count($nums) - 1; $j++) {
                $current_j = $nums[$j];
                for ($l=$j; $l < count($nums); $l++) {
                    $current_l = $nums[$l];
                    if ($current_i + $current_j + $current_l === $target) {
                        $result[] = [$current_i, $current_j, $current_l];
                    }
                }
            }
        }

        return $result;
    }



}