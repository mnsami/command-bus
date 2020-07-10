<?php
declare(strict_types=1);

namespace Shared\Infrastructure\CommandBus;

use Shared\Application\Command;
use Shared\Application\CommandHandler;

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
