<?php
declare(strict_types=1);

namespace Shared\Infrastructure\Exception;

use Shared\Application\DataTransformer;

interface DomainException extends \Throwable
{
    /**
     * Return error as DTO
     *
     * @return DataTransformer
     */
    public function getErrorResponse(): DataTransformer;
}
