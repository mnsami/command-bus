<?php
declare(strict_types=1);

namespace Shared\Application;

class EmptyDto implements DataTransformer
{

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }
}
