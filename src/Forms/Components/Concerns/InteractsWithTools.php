<?php

namespace Ekremogul\FilamentGrapesjs\Forms\Components\Concerns;

use Closure;

trait InteractsWithTools
{
    public function getTools(): array
    {
        return $this->evaluate($this->tools);
    }
}
