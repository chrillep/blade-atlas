<button
    x-tabs:tab
    type="button"
    {{ $attributes->class(['whitespace-nowrap border-b-2 px-1 py-4 text-sm font-medium']) }}
    x-bind:class="$tab.isSelected ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"
>
    {{ $slot }}
</button>
