<div x-data x-tabs>
    <div class="border-b border-gray-200">
        <nav tabs:list class="-mb-px flex space-x-8" aria-label="Tabs">
            {{ $list }}
        </nav>
    </div>

    <div x-tabs:panels >

        {{ $slot }}

    </div>

</div>
