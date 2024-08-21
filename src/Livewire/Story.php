<?php

namespace Arrgh11\WireBook\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;

abstract class Story extends Component implements Contracts\IsStory
{

    use Concerns\InteractsWithControls;
    use Concerns\InteractsWithCode;

    public function render()
    {
        return view($this->view, [
            'controls' => $this->renderControls(),
            'code' => $this->getCode(),
        ]);
    }

}
