<?php declare(strict_types=1);
namespace thephpcc\greed;

use function count;

final class Greed
{
    /**
     * @param D6[] $dice
     *
     * @throws OutOfRangeException
     */
    public function score(array $dice): int
    {
        if (count($dice) === 1 && $dice[0]->asInt() === 1) {
            return 100;
        }

        return 0;
    }
}
