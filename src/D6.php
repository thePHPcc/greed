<?php declare(strict_types=1);
namespace thephpcc\greed;

final class D6
{
    private int $pips;

    /**
     * @throws OutOfRangeException
     */
    public function __construct(int $pips)
    {
        if ($pips < 1 || $pips > 6) {
            throw new OutOfRangeException(
                sprintf(
                    'A six-sided die cannot have %d pips',
                    $pips
                )
            );
        }

        $this->pips = $pips;
    }

    public function asInt(): int
    {
        return $this->pips;
    }
}
