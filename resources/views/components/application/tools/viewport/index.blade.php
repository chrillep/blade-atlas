<div class="order-last flex w-full gap-x-8 text-sm font-semibold leading-6 sm:order-none sm:w-auto sm:border-l sm:border-gray-200 sm:pl-6 sm:leading-7">
    <button
        x-on:click="$store.viewport.changeViewport('desktop')"
        x-bind:class="{
            'text-indigo-600': $store.viewport.size == 'desktop',
            'text-gray-700': $store.viewport.size != 'desktop'
        }">
        Desktop
    </button>
    <button
        x-on:click="$store.viewport.changeViewport('tablet')"
        x-bind:class="{
            'text-indigo-600': $store.viewport.size == 'tablet',
            'text-gray-700': $store.viewport.size != 'tablet'
        }">
        Tablet
    </button>
    <button
        x-on:click="$store.viewport.changeViewport('mobile')"
        x-bind:class="{
            'text-indigo-600': $store.viewport.size == 'mobile',
            'text-gray-700': $store.viewport.size != 'mobile'
        }">
        Mobile
    </button>
</div>
