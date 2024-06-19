<?php

declare(strict_types=1);

/*
 * East Paas.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license
 * it is available in LICENSE file at the root of this package
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to richard@teknoo.software so we can send you a copy immediately.
 *
 *
 * @copyright   Copyright (c) EIRL Richard Déloge (https://deloge.io - richard@deloge.io)
 * @copyright   Copyright (c) SASU Teknoo Software (https://teknoo.software - contact@teknoo.software)
 *
 * @link        http://teknoo.software/east/paas Project website
 *
 * @license     http://teknoo.software/license/mit         MIT License
 * @author      Richard Déloge <richard@teknoo.software>
 */

namespace Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;

class IssueTest extends TestCase
{
    /**
     * @var Process
     */
    private $process;

    public function getProcessMock(): MockObject&Process
    {
        if (!$this->process instanceof Process) {
            $this->process = $this->createMock(Process::class);
        }

        return $this->process;
    }

    public function testBug()
    {
        $p = $this->getProcessMock();

        self::assertInstanceOf(
            Process::class,
            $p->setWorkingDirectory("foo"),
        );
    }
}
