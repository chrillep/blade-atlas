<?php

namespace Arrgh11\WireBook\Livewire;

use Livewire\Component;

abstract class Story extends Component implements Contracts\IsStory
{
    use Concerns\InteractsWithCode;
    use Concerns\InteractsWithControls;

    public static function getStoryName(): string
    {
        return class_basename(static::class);
    }

    public static function getStoryId(): string
    {
        return (string) str(static::class)
            ->replace('\\', ' ')
            ->replace('WireBook', 'Wirebook')
            ->kebab();

    }

    public function render()
    {
        return view($this->view, [
            'controls' => $this->renderControls(),
            'code' => $this->getCode(),
        ]);
    }
}
