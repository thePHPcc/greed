<?php declare(strict_types=1);
namespace thephpcc\greed;

final class Greed
{
    /**
     * @param D6[] $dice
     *
     * @throws OutOfRangeException
     */
    public function score(array $dice): int
    {
        $score = 0;

        $ones = 0;
        $twos = 0;

        foreach ($dice as $die) {
            if ($die->asInt() === 1) {
                $ones++;
            }

            if ($die->asInt() === 2) {
                $twos++;
            }
        }

        if ($ones === 1) {
            $score += 100;
        }

        if ($ones === 3) {
            $score += 1000;
        }

        if ($twos === 3) {
            $score += 200;
        }

        return $score;
    }
}
