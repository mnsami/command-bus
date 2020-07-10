<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Infrastructure\Exception;

use Mnsami\CommandBus\Application\DataTransformer;

interface DomainException extends \Throwable
{
    /**
     * Return error as DTO
     *
     * @return DataTransformer
     */
    public function getErrorResponse(): DataTransformer;
}
