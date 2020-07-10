<?php
declare(strict_types=1);

namespace Shared\Infrastructure\CommandBus;

use Shared\Application\Command;
use Shared\Application\DataTransformer;

interface CommandBus
{
    /**
     * @param Command $command
     * @return DataTransformer
     */
    public function dispatch(Command $command): DataTransformer;
}
