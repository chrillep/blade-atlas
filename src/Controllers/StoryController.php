<?php

namespace Arrgh11\WireBook\Controllers;

use Illuminate\Support\Str;
use Livewire\Features\SupportPageComponents\PageComponentConfig;
use Livewire\Features\SupportPageComponents\SupportPageComponents;

class StoryController
{
    public function index(string $story)
    {

        if (!Str::startsWith($story, 'test-')) {
            return view('wirebook::application.index', ['story' => $story]);
        }

        // Here's we're hooking into the "__invoke" method being called on a component.
        // This way, users can pass Livewire components into Routes as if they were
        // simple invokable controllers. Ex: Route::get('...', SomeLivewireComponent::class);
        $html = null;

        $layoutConfig = SupportPageComponents::interceptTheRenderOfTheComponentAndRetreiveTheLayoutConfiguration(function () use (&$html, $story) {
            //            $params = SupportPageComponents::gatherMountMethodParamsFromRouteParameters($storyClass);

            $storyClass = match($story) {
                'test-button' => \Arrgh11\WireBook\Livewire\Tests\Button::class,
                'test-button-group' => \Arrgh11\WireBook\Livewire\Tests\ButtonGroup::class,
            };

            $html = app('livewire')->mount($storyClass);

        });

        $layoutConfig = $layoutConfig ?: new PageComponentConfig;

        $layoutConfig->normalizeViewNameAndParamsForBladeComponents();

        $response = response(SupportPageComponents::renderContentsIntoLayout($html, $layoutConfig));

        if (is_callable($layoutConfig->response)) {
            call_user_func($layoutConfig->response, $response);
        }

        return $response;
    }
}
