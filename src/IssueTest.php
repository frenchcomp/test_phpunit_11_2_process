<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class IssueTest extends TestCase
{
    public function testBug()
    {
        $p = $this->createMock(Issue::class);

        $p->expects($this->any())
            ->method('stop')
            ->willReturn(0);

        self::assertInstanceOf(
            Issue::class,
            $p->callWithSelfAsReturnType("foo"),
        );

        self::assertInstanceOf(
            Issue::class,
            $p->callWithStaticAsReturnType("foo"),
        );
    }
}
