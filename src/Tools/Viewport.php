<?php

namespace Arrgh11\WireBook\Tools;

class Viewport extends Tool
{
    //Blade view
    protected static string $view = 'wirebook::application.tools.viewport';

    //Alpine component
    protected static string $component = <<<'JS'
Alpine.store('viewport', {
    size: 'desktop',
    changeViewport(size) {
        this.size = size
    }
})
JS;
}
