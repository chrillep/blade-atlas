<?php

declare(strict_types=1);

namespace Arrgh11\WireBook\Contracts;

use Illuminate\Support\Str;
use Livewire\Livewire;

trait ManagesStories
{
    protected $stories = [];

    public function getStories()
    {
        return $this->stories;
    }

    public function discoverStories(): void
    {
        $paths = config('wirebook.discover.paths');

        $storyGroups = [];

        foreach ($paths as $path) {
            if (! is_dir($path)) {
                continue;
            }
            // get group folders in the path
            $groups = scandir($path);

            // remove . and .. from the array
            $groups = array_diff($groups, ['.', '..']);

            foreach ($groups as $group) {
                if (! is_dir($path.'/'.$group)) {
                    continue;
                }
                // get the stories in the group
                $stories = scandir($path.'/'.$group);

                // remove . and .. from the array
                $stories = array_diff($stories, ['.', '..']);

                foreach ($stories as $story) {
                    $storyName = Str::replace('.php', '', $story);
                    $kebab = Str::kebab('wirebook '.$group.' '.$storyName);
                    $className = 'App\\WireBook\\Stories\\'.$group.'\\'.$storyName;
                    Livewire::component($kebab, $className);
                    $storyGroups[$group][] = [
                        'component' => $kebab,
                        'class' => $className,
                        'title' => $className::getStoryName(),
                        'route' => $className::getStoryId(),
                    ];
                }
            }
        }
        $this->stories = $storyGroups;
    }
}
