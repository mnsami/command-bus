<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Application;

use Mnsami\CommandBus\Infrastructure\Exception\SorryWrongCommand;

interface CommandHandler
{
    /**
     * Command class name
     *
     * @return string
     */
    public function handles(): string;

    /**
     * Handle command business logic
     *
     * @param Command $command
     * @return DataTransformer
     */
    public function handle(Command $command): DataTransformer;

    /**
     * @param Command $command
     * @throws SorryWrongCommand
     */
    public function assertItHandlesCommand(Command $command);
}
