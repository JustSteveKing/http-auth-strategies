<?php declare(strict_types=1);

namespace JustSteveKing\HttpAuth\Strategies\Tests;

use JustSteveKing\HttpAuth\Strategies\BasicStrategy;
use JustSteveKing\HttpAuth\Strategies\Interfaces\StrategyInterface;
use PHPUnit\Framework\TestCase;

class BasicStrategyTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_create_a_new_strategy()
    {
        $strategy = new BasicStrategy('test');

        $this->assertInstanceOf(
            StrategyInterface::class,
            $strategy
        );

        $this->assertEquals(
            ['Authorization' => 'Bearer test'],
            $strategy->getHeader('Bearer')
        );
    }

    /**
     * @test
     */
    public function it_can_change_the_auth_prefix()
    {
        $strategy = new BasicStrategy('test');

        $this->assertInstanceOf(
            StrategyInterface::class,
            $strategy
        );

        $this->assertEquals(
            ['Authorization' => 'NewPrefix test'],
            $strategy->getHeader('NewPrefix')
        );
    }
}
