<div class="">

    <button type="button"
        class="rounded bg-indigo-600 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        {{ $buttonText }}
    </button>

    @teleport('#form')
        <div class="space-y-4">
            <x-wirebook::support.form.input />
            <x-wirebook::support.form.textarea />
            <x-wirebook::support.form.radio />
            <x-wirebook::support.form.toggle />
            <x-wirebook::support.form.select />
        </div>
    @endteleport

</div>
