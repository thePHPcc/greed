<?php declare(strict_types=1);
namespace thephpcc\greed;

use PHPUnit\Framework\TestCase;

/**
 * @covers \thephpcc\greed\Greed
 *
 * @uses \thephpcc\greed\D6
 */
final class GreedTest extends TestCase
{
    public function test_Single_1_scores_100(): void
    {
        $this->assertSame(100, $this->greed()->score([new D6(1)]));
    }

    public function test_Triple_1_scores_1000(): void
    {
        $this->assertSame(1000, $this->greed()->score([new D6(1), new D6(1), new D6(1)]));
    }

    public function test_Triple_2_scores_200(): void
    {
        $this->assertSame(200, $this->greed()->score([new D6(2), new D6(2), new D6(2)]));
    }

    public function test_Triple_3_scores_300(): void
    {
        $this->assertSame(300, $this->greed()->score([new D6(3), new D6(3), new D6(3)]));
    }

    public function test_Double_1_scores_0(): void
    {
        $this->assertSame(0, $this->greed()->score([new D6(1), new D6(1)]));
    }

    public function test_Single_2_scores_0(): void
    {
        $this->assertSame(0, $this->greed()->score([new D6(2)]));
    }

    private function greed(): Greed
    {
        return new Greed;
    }
}
