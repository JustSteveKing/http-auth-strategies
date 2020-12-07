<?php declare(strict_types=1);

namespace JustSteveKing\HttpAuth\Strategies;

use JustSteveKing\HttpAuth\Strategies\Interfaces\StrategyInterface;

/**
 * Custom Strategy Class - a custom strategy options.
 */
class CustomStrategy implements StrategyInterface
{
    /**
     * @var string
     */
    protected string $authString;

    /**
     * @var string
     */
    protected string $headerName = 'Authorization';

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
            $this->headerName => $headerValue,
        ];
    }

    /**
     * Set the Header Name you wish to use for your auth strategy
     *
     * @param string $headerName
     */
    public function setHeaderName(string $headerName)
    {
        $this->headerName = $headerName;
    }
}
