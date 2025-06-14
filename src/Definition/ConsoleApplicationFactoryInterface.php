<?php declare(strict_types=1);

namespace AlanVdb\Console\Definition;

interface ConsoleApplicationFactoryInterface
{
    public function createConsoleApplication(string $name, string $version, string ...$commands): ConsoleApplicationInterface;
}