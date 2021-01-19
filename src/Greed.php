<?php declare(strict_types=1);
namespace thephpcc\greed;

final class Greed
{
    /**
     * @throws InvalidDieRollException
     */
    public function score(array $dice): int
    {
        foreach ($dice as $die) {
            $this->ensureDieIsSixSided($die);
        }

        if ($dice === [1]) {
            return 100;
        }

        return 0;
    }

    /**
     * @throws InvalidDieRollException
     */
    private function ensureDieIsSixSided(int $die): void
    {
        if ($die > 6 || $die < 1) {
            throw new InvalidDieRollException(
                sprintf(
                    'A six-sided die cannot roll a %d',
                    $die
                )
            );
        }
    }
}
