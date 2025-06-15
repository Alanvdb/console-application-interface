<?php declare(strict_types=1);

namespace AlanVdb\Console\Definition;

interface ConsoleApplicationFactoryInterface
{
    /**
     * @param string $name Console application name
     * @param string $version Console application version
     * @param string ...$commands Console application commands
     * @throws \AlanVdb\Console\Exception\InvalidArgumentException If a provided command does not implement \Symfony\Component\Console\Command\SignalableCommandInterface
     */
    public function createConsoleApplication(string $name, string $version, string ...$commands): ConsoleApplicationInterface;
}