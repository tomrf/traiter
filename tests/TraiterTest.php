<?php

declare(strict_types=1);

namespace Tomrf\Traiter\Test;

use PHPUnit\Framework\TestCase;
use Tomrf\Traiter\Traiter;

/**
 * @internal
 * @covers \Tomrf\Traiter\Traiter
 */
final class TraiterTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        // ...
    }

    public function testTraiterIsInstanceOfTraiter(): void
    {
        static::assertInstanceOf(Traiter::class, new Traiter());
    }

    public function testGetClass(): void
    {
        static::assertSame(Traiter::class, (new Traiter())->getClass());
    }
}
