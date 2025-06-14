<?php declare(strict_types=1);

namespace AlanVdb\Console\Exception;

use AlanVdb\Console\Definition\ExceptionInterface;

class InvalidArgumentException
    extends \InvalidArgumentException
    implements ExceptionInterface
{}
