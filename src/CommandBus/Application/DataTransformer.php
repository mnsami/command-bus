<?php
declare(strict_types=1);

namespace Mnsami\CommandBus\Application;

interface DataTransformer
{
    /**
     * @return array
     */
    public function toArray(): array;
}
