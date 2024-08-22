@props([
    'form' => null
])

<x-wirebook::application.layout>
    <div class="w-full flex relative">

        @persist('sidebar')
            <x-wirebook::application.sidebar />
        @endpersist


        <div class="w-full flex flex-col">

            <x-wirebook::application.navbar />

            <div class="flex w-full h-full">

                <main class="py-10 w-full h-full">
                    <div class="flex flex-col justify-center items-center w-full h-full">
                        <div class="w-full px-4 sm:px-6 lg:px-8">
                            {{ $slot }}
                        </div>

                    </div>
                </main>

                <x-wirebook::application.panel />

            </div>


        </div>
    </div>
</x-wirebook::application.layout>
