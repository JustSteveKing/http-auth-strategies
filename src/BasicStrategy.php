<?php declare(strict_types=1);

namespace JustSteveKing\HttpAuth\Strategies;

use JustSteveKing\HttpAuth\Strategies\Interfaces\StrategyInterface;

/**
 * Basic Strategy Class - the default for most strategies.
 */
class BasicStrategy implements StrategyInterface
{
    /**
     * @var string
     */
    protected string $authString;

    /**
     * Basic Strategy constructor
     *
     * @param string $authString
     * @return void
     */
    public function __construct(string $authString)
    {
        $this->authString = $authString;
    }

    /**
     * Return the correctly formatted Header value.
     *
     * @param string $prefix
     * @return array
     */
    public function getHeader(string $prefix): array
    {
        return [
            'Authorization' => "{$prefix} {$this->authString}"
        ];
    }
}
