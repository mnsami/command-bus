<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Infrastructure\CommandBus;

use Psr\Container\ContainerInterface;
use Mnsami\CommandBus\Infrastructure\Exception\SorryCommandNotHandled;

abstract class SharedCommandHandlerFactory implements CommandHandlerFactory
{
    /** @var ContainerInterface */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @inheritDoc
     */
    public function getCommandHandler(Command $command): CommandHandler
    {
        $commandFQDN = get_class($command);
        if (!$this->canHandleCommand($command)) {
            throw new SorryCommandNotHandled("Can not handle command: '{$commandFQDN}'");
        }

        $callback = $this->commandHandlers()[$commandFQDN];

        return $callback($this->container);
    }

    /**
     * @param Command $command
     * @return bool
     */
    public function canHandleCommand(Command $command): bool
    {
        $handlers = $this->commandHandlers();
        $commandFQDN = get_class($command);

        return array_key_exists($commandFQDN, $handlers);
    }

    /**
     * @return array
     */
    abstract protected function commandHandlers(): array;
}
