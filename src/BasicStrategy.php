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
     * @param string|null $prefix
     * @return array
     */
    public function getHeader(string $prefix = null): array
    {
        $headerValue = "";

        if (! is_null($prefix)) {
            $headerValue .= "{$prefix} ";
        }

        $headerValue .= "{$this->authString}";

        return [
            'Authorization' => $headerValue,
        ];
    }
}
