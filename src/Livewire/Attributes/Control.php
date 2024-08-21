<?php

namespace Arrgh11\WireBook\Livewire\Attributes;

use Arrgh11\WireBook\Enums\Control as ControlEnum;
use Illuminate\Support\Facades\Blade;

#[\Attribute]
class Control
{

    public ControlEnum $controlType = ControlEnum::TEXT;

    public string $name = '';
    public string $label = '';

    public ?string $view = null;

    public function __construct(
        ControlEnum $type,
        string $label = '',
        ?string $view = null,
        ?string $name = null
    )
    {
        $this->controlType = $type;

        $this->label = $label;

        $this->view = $view ? $view : $this->controlType->getView();

    }

    public function setName(string $name): Control
    {
        $this->name = $name;
        return $this;
    }

    public function renderControl(): string
    {

        return Blade::render('<x-dynamic-component :component="$view" :label="$label" wire:model.live="{{$name}}" />', [
            'view' => $this->view,
            'label' => $this->label,
            'name' => $this->name,
        ]);
    }

}
