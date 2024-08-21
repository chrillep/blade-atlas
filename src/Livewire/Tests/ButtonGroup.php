<?php

namespace Arrgh11\WireBook\Livewire\Tests;

use Arrgh11\WireBook\Livewire\Story;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('wirebook::application.story')]
class ButtonGroup extends Story
{
    public string $buttonText = 'Button Text';

    public bool $middle = false;

    protected string $view = 'wirebook::livewire.tests.button-group';

}
