<?php declare(strict_types=1);

namespace AlanVdb\Console\Definition;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface ConsoleApplicationInterface
{
    /**
     * @return string The console application name
     */
    public function getName() : string;

    /**
     * @return string The console application version
     */
    public function getVersion() : string;

    public function run(?InputInterface $input = null, ?OutputInterface $output = null): int;

    public function has(string $command) : bool;
}