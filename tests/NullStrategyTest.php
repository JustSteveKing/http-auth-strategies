<?php declare(strict_types=1);

namespace JustSteveKing\HttpAuth\Strategies\Tests;

use JustSteveKing\HttpAuth\Strategies\Interfaces\StrategyInterface;
use JustSteveKing\HttpAuth\Strategies\NullStrategy;
use PHPUnit\Framework\TestCase;

class NullStrategyTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_create_a_new_strategy()
    {
        $strategy = new NullStrategy();

        $this->assertInstanceOf(
            StrategyInterface::class,
            $strategy
        );

        $this->assertEquals(
            [],
            $strategy->getHeader('Bearer')
        );

        $this->assertEmpty(
            $strategy->getHeader('Bearer')
        );
    }
}
