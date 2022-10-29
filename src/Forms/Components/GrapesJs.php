<?php

namespace Ekremogul\FilamentGrapesjs\Forms\Components;

use Closure;
use Ekremogul\FilamentGrapesjs\Forms\Components\Concerns\InteractsWithTools;
use Filament\Forms\Components\Field;


class GrapesJs extends Field
{
    use InteractsWithTools;
    protected string $view = 'filament-grapesjs::forms.components.fields.grapesjs';

    protected array | Closure $tools = [

    ];
    protected string $htmlData;

    protected int | Closure | null $minHeight = 768;

    public function minHeight(int | Closure | null $minHeight): static
    {
        $this->minHeight = $minHeight;

        return $this;
    }

    public function getMinHeight(): ?int
    {
        return $this->evaluate($this->minHeight);
    }

    public function getHtmlData()
    {
        return $this->evaluate($this->getState());
    }
}
