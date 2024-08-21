<?php

namespace Arrgh11\WireBook\Commands\Stories;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

use function Laravel\Prompts\text;

class NewStoryCommand extends Command
{
    protected $signature = 'wirebook:story';

    protected $description = 'Create a new Button';

    public function handle(): void
    {

        //ask for the story name
        $name = text(label: 'What is the Story\'s name?', required: true);

        //ask for the story description

        //ask for the story group
        $group = text(label: 'What is the Story\'s group?', default: 'General', required: true);

        //output the story name
        $this->info("Story name: $name");
        $this->info("Story group: $group");

        //create a group for the story if it doesn't exist
        $studlyGroup = Str::studly($group);

        //make a new Button component with the name in the App\WireBook\Stories\{group} namespace
        $studlyName = Str::studly($name);

        //make a new Button view with the name in the resources/views/wirebook/stories/{group} directory

    }
}
