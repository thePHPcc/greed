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
        $ones = 0;

        foreach ($dice as $die) {
            if ($die->asInt() === 1) {
                $ones++;
            }
        }

        if ($ones === 1) {
            return 100;
        }

        return 0;
    }
}
