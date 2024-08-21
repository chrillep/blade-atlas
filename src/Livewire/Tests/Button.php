<?php

namespace Arrgh11\WireBook\Livewire\Tests;

use Arrgh11\WireBook\Enums\Control as ControlType;
use Arrgh11\WireBook\Livewire\Attributes\Control;
use Arrgh11\WireBook\Livewire\Story;
use Livewire\Attributes\Layout;

#[Layout('wirebook::application.story')]
class Button extends Story
{
    #[Control(ControlType::TEXT, 'Button Text')]
    public string $buttonText = 'Button Text';

    protected string $view = 'wirebook::livewire.tests.button';
}
