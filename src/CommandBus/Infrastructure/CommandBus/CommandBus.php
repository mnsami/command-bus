<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Infrastructure\CommandBus;

use Mnsami\CommandBus\Application\Command;
use Mnsami\CommandBus\Application\DataTransformer;

interface CommandBus
{
    /**
     * @param Command $command
     * @return DataTransformer
     */
    public function dispatch(Command $command): DataTransformer;
}
