<!-- Static sidebar for desktop -->
<div class="flex w-72 flex-col h-full">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
        <div class="flex h-16 shrink-0 items-center">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        </div>
        <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li>
                    <x-wirebook::application.sidebar.menu.group title="Application">
                        <x-wirebook::application.sidebar.menu.item href="{{route('wirebook.story', ['story' => 'component-one'])}}">
                            Component One
                        </x-wirebook::application.sidebar.menu.item>
                        <x-wirebook::application.sidebar.menu.item href="{{route('wirebook.story', ['story' => 'component-two'])}}">
                            Component Two
                        </x-wirebook::application.sidebar.menu.item>
                        <x-wirebook::application.sidebar.menu.item href="{{route('wirebook.story', ['story' => 'component-three'])}}">
                            Component Three
                        </x-wirebook::application.sidebar.menu.item>
                        <x-wirebook::application.sidebar.menu.item href="{{route('wirebook.story', ['story' => 'test-story'])}}">
                            Test Story
                        </x-wirebook::application.sidebar.menu.item>
                    </x-wirebook::application.sidebar.menu.group>
                </li>

                <li class="mt-auto">
                    <a href="#" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                        <x-heroicon-o-cog-6-tooth class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" />
                        Settings
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
