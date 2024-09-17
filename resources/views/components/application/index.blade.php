@props([
    'form' => null,
    'title' => null
])

<x-wirebook::application.layout>
    <div class="w-full flex relative" >

        @persist('sidebar')
            <x-wirebook::application.sidebar />
        @endpersist


        <div class="w-full flex flex-col">

{{--            <x-wirebook::application.navbar />--}}

            <div class="flex w-full h-full bg-gray-100">

                <main class="w-full h-full" x-data >

                    <x-wirebook::application.toolbar >
                        @php
                            $tools = \Arrgh11\WireBook\Facades\WireBook::getTools();
                        @endphp

                        @foreach($tools as $tool)
                            {{-- @include($tool['view']) --}}
                            <x-dynamic-component :component="$tool['view']" />
                        @endforeach
                    </x-wirebook::application.toolbar>


                    <div class="flex flex-col justify-center items-center w-full h-full bg-gray-200 px-4 sm:px-6 lg:px-8" >
                        <div class="bg-gray-100 w-full h-full" x-bind:class="{
                            'max-w-7xl': $store.viewport.size === 'desktop',
                            'max-w-2xl': $store.viewport.size === 'tablet',
                            'max-w-md': $store.viewport.size === 'mobile'
                        }">
                            {{ $slot }}
                        </div>
                    </div>

                </main>

                <x-wirebook::application.panel />

            </div>


        </div>
    </div>
</x-wirebook::application.layout>
