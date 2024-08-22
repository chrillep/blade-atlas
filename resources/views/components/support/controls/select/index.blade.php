@props([
    'label' => 'Label',
    'name' => 'location',
    'options' => []
])

<div x-id="['select-control']">
    <label x-bind:for="$id('select-control')" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    <select
        {{ $attributes->class([
            'block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6'
        ]) }}
        wire:model.blur="{{ $name }}"
        x-bind:id="$id('select-control')">
        @foreach($options as $value => $label)
            <option value="{{$value}}">{{ $label }}</option>
        @endforeach
    </select>
</div>
