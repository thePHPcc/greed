<?php declare(strict_types=1);
namespace thephpcc\greed;

use function sprintf;
use PHPUnit\Framework\TestCase;

/**
 * @covers \thephpcc\greed\Greed
 */
final class GreedTest extends TestCase
{
    public function test_We_use_D6_die(): void
    {
        $this->expectException(InvalidDieRollException::class);

        $this->greed()->score([7]);
    }

    public function test_We_use_D6_die2(): void
    {
        $this->expectException(InvalidDieRollException::class);

        $this->greed()->score([0]);
    }

    public function test_A_single_1_scores_100(): void
    {
        $this->assertSame(100, $this->greed()->score([1]));
    }

    public function test_A_single_2_scores_0(): void
    {
        $this->assertSame(0, $this->greed()->score([2]));
    }

    private function greed(): Greed
    {
        return new Greed;
    }
}
