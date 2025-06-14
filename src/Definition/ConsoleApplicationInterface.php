<?php declare(strict_types=1);

namespace AlanVdb\Console\Definition;

interface ConsoleApplicationInterface
{
    public function getName() : string;
    public function getVersion() : string;
}