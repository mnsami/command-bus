<?php
declare(strict_types=1);

namespace Shared\Infrastructure\Exception;

use Shared\Application\DataTransformer;
use Shared\Application\ErrorExceptionDto;

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
