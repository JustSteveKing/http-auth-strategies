<?php declare(strict_types=1);

namespace JustSteveKing\HttpAuth\Strategies\Interfaces;

interface StrategyInterface
{
    /**
     * Return the correctly formatted Header value.
     *
     * @param string|null $prefix
     * @return array
     */
    public function getHeader(string $prefix = null): array;
}
