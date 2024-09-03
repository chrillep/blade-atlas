<div class="order-last flex w-full gap-x-8 text-sm font-semibold leading-6 sm:order-none sm:w-auto sm:border-l sm:border-gray-200 sm:pl-6 sm:leading-7">
    <button
        x-on:click="changeViewport('desktop')"
        x-bind:class="{
        'text-indigo-600': size == 'desktop',
        'text-gray-700': size != 'desktop'
        }">
        Desktop
    </button>
    <button
        x-on:click="changeViewport('tablet')"
        x-bind:class="{
            'text-indigo-600': size == 'tablet',
            'text-gray-700': size != 'tablet'
        }">
        Tablet
    </button>
    <button
        x-on:click="changeViewport('mobile')"
        x-bind:class="{
            'text-indigo-600': size == 'mobile',
            'text-gray-700': size != 'mobile'
        }">
        Mobile
    </button>
</div>
