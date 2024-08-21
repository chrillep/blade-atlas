<?php

namespace Arrgh11\WireBook\Livewire\Tests;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('wirebook::application.story')]
class Story extends Component
{

    public string $buttonText = 'Button Text';
//    public ?string $story;

    public function render()
    {
        return view('wirebook::livewire.story');
    }
}
