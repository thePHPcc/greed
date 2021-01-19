<?php declare(strict_types=1);
namespace thephpcc\greed;

final class Greed
{
    /**
     * @throws OutOfRangeException
     */
    public function score(D6 $die): int
    {
        if ($die->asInt() === 1) {
            return 100;
        }

        return 0;
    }
}
