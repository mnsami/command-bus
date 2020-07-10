<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Application;

final class ErrorExceptionDto implements DataTransformer
{
    /** @var \Exception */
    private $exception;

    public function __construct(\Exception $exception)
    {
        $this->exception = $exception;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'error' => $this->exception->getMessage()
        ];
    }
}
