@props([
    'title' => 'Menu Group',
])

<div x-data="{ active: false }">
    <div
        x-data="{
            id: 1,
            get expanded() {
                return this.active === this.id
            },
            set expanded(value) {
                this.active = value ? this.id : null
            },
        }">

        <button
            type="button"
            x-on:click="expanded = !expanded"
            :aria-expanded="expanded"
            class="flex w-full items-center appearance-none gap-x-3 rounded-md p-2 text-gray-700 hover:text-indigo-600 hover:bg-gray-50"
        >
            <span x-show="expanded" aria-hidden="true">&minus;</span>
            <span x-show="!expanded" aria-hidden="true">&plus;</span>

            @if($title instanceof \Illuminate\Contracts\Support\Htmlable)
                {{ $title }}
            @else
                <div @class([
                ' text-sm font-semibold leading-6',
            ])>{{ $title }}</div>
            @endif
        </button>

        <div x-show="expanded" x-collapse>
            <ul role="list" class="-mx-2 mt-2 space-y-1">
                {{ $slot }}
            </ul>
        </div>

    </div>
</div>
