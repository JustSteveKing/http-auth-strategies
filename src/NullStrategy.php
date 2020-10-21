<?php declare(strict_types=1);

namespace JustSteveKing\HttpAuth\Strategies;

use JustSteveKing\HttpAuth\Strategies\Interfaces\StrategyInterface;

/**
 * Null Strategy implementation.
 */
class NullStrategy implements StrategyInterface
{
    /**
     * Return the correctly formatted Header value.
     *
     * @param string $prefix
     * @return array
     */
    public function getHeader(string $prefix): array
    {
        return [];
    }
}
