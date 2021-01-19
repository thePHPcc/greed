<?php declare(strict_types=1);
namespace thephpcc\greed;

use PHPUnit\Framework\TestCase;

/**
 * @covers \thephpcc\greed\D6
 */
final class D6Test extends TestCase
{
    public function test_Cannot_have_less_than_one_pip(): void
    {
        $this->expectException(OutOfRangeException::class);

        new D6(0);
    }

    public function test_Cannot_have_more_than_six_pips(): void
    {
        $this->expectException(OutOfRangeException::class);

        new D6(7);
    }
}
