<?php

declare(strict_types=1);

namespace Test;

class Issue
{
    public function __destruct()
    {
        $this->stop(0);
    }

    public function setWorkingDirectory(string $cwd): static
    {
        return $this;
    }

    public function stop(float $timeout = 10): ?int
    {
        return 0;
    }
}