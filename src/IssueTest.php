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

        self::assertInstanceOf(
            Issue::class,
            $p->setWorkingDirectory("foo"),
        );
    }
}
