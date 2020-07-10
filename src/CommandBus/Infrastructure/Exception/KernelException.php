<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Infrastructure\Exception;

use Mnsami\CommandBus\Application\DataTransformer;
use Mnsami\CommandBus\Application\ErrorExceptionDto;

abstract class KernelException extends \Exception implements DomainException
{
    /**
     * @inheritDoc
     */
    public function getErrorResponse(): DataTransformer
    {
        return new ErrorExceptionDto($this);
    }
}
