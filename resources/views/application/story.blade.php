<x-wirebook::application :title="$title">

    {{--    <livewire:wirebook-app />--}}
    {{ $slot }}

{{--    @if(!empty($form))--}}
{{--        <x-slot:form>--}}
{{--            {{ $form }}--}}
{{--        </x-slot:form>--}}
{{--    @endif--}}

</x-wirebook::application>
