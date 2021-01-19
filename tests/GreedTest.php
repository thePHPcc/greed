<?php declare(strict_types=1);
namespace thephpcc\greed;

use function sprintf;
use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
final class GreedTest extends TestCase
{
    public function test_We_use_D6_die(): void
    {
        $this->expectException(InvalidDieRollException::class);

        $this->score([7]);
    }

    public function test_We_use_D6_die2(): void
    {
        $this->expectException(InvalidDieRollException::class);

        $this->score([0]);
    }

    public function test_A_single_1_scores_100(): void
    {
        $this->assertSame(100, $this->score([1]));
    }

    public function test_A_single_2_scores_0(): void
    {
        $this->assertSame(0, $this->score([2]));
    }

    private function score(array $dice): int
    {
        foreach ($dice as $die) {
            if ($die > 6 || $die < 1) {
                throw new InvalidDieRollException(
                    sprintf(
                        'A six-sided die cannot roll a %d',
                        $die
                    )
                );
            }
        }

        if ($dice === [1]) {
            return 100;
        }

        return 0;
    }
}
