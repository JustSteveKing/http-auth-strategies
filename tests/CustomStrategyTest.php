<?php declare(strict_types=1);

namespace JustSteveKing\HttpAuth\Strategies\Tests;

use JustSteveKing\HttpAuth\Strategies\CustomStrategy;
use JustSteveKing\HttpAuth\Strategies\Interfaces\StrategyInterface;
use PHPUnit\Framework\TestCase;

class CustomStrategyTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_create_a_new_strategy()
    {
        $strategy = new CustomStrategy('test');

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
        $strategy = new CustomStrategy('test');

        $this->assertInstanceOf(
            StrategyInterface::class,
            $strategy
        );

        $this->assertEquals(
            ['Authorization' => 'NewPrefix test'],
            $strategy->getHeader('NewPrefix')
        );
    }

    /**
     * @test
     */
    public function it_can_set_a_custom_header_name()
    {
        $strategy = new CustomStrategy('test');
        $strategy->setHeaderName('X-API-KEY');

        $this->assertInstanceOf(
            StrategyInterface::class,
            $strategy
        );

        $this->assertEquals(
            ['X-API-KEY' => 'NewPrefix test'],
            $strategy->getHeader('NewPrefix')
        );

        $this->assertEquals(
            ['X-API-KEY' => 'test'],
            $strategy->getHeader()
        );
    }
}
