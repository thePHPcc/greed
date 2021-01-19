<?php declare(strict_types=1);
namespace thephpcc\greed;

use PHPUnit\Framework\TestCase;

/**
 * @covers \thephpcc\greed\Greed
 */
final class GreedTest extends TestCase
{
    public function test_A_single_1_scores_100(): void
    {
        $this->assertSame(100, $this->greed()->score([new D6(1)]));
    }

    public function test_A_single_2_scores_0(): void
    {
        $this->assertSame(0, $this->greed()->score([new D6(2)]));
    }

    private function greed(): Greed
    {
        return new Greed;
    }
}
