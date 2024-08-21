<?php

namespace Arrgh11\WireBook\Livewire;

use Livewire\Component;

abstract class Story extends Component implements Contracts\IsStory
{
    use Concerns\InteractsWithCode;
    use Concerns\InteractsWithControls;

    public function render()
    {
        return view($this->view, [
            'controls' => $this->renderControls(),
            'code' => $this->getCode(),
        ]);
    }
}
