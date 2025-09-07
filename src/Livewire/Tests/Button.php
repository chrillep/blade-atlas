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
    public string $text = 'Button Text';

    #[Control(
        type: ControlType::SELECT,
        label: 'Button Size',
        options: [
            'xs' => 'Extra Small',
            'sm' => 'Small',
            'md' => 'Medium',
            'lg' => 'Large',
            'xl' => 'Extra Large',
        ]
    )]
    public string $size = 'xs'; // xs, sm, md, lg, xl

    protected string $view = 'wirebook::livewire.tests.button';
}
