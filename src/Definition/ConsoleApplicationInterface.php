<?php declare(strict_types=1);

namespace AlanVdb\Console\Definition;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

interface ConsoleApplicationInterface
{
    public function getName() : string;
    public function getVersion() : string;
    public function run(?InputInterface $input = null, ?OutputInterface $output = null): int;
}