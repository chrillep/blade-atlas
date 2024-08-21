@props([
    'size' => 'base',
    'icon' => 'heroicon-o-bookmark'
])

<li>
    <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
    <a wire:navigate {{$attributes->class(['group flex gap-x-3 rounded-md p-2 text-sm font-normal leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600']) }}>
        @svg($icon, 'h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600')
        <span class="truncate">{{ $slot }}</span>
    </a>
</li>
