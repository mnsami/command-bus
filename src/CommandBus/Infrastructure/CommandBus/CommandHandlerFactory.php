<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Infrastructure\CommandBus;

use Mnsami\CommandBus\Application\Command;
use Mnsami\CommandBus\Application\CommandHandler;

interface CommandHandlerFactory
{
    /**
     * @param Command $command
     * @return CommandHandler
     */
    public function getCommandHandler(Command $command): CommandHandler;

    /**
     * @param Command $command
     * @return bool
     */
    public function canHandleCommand(Command $command): bool;
}
