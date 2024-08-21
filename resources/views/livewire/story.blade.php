<div class="">

    @yield('content')

    @teleport('#controls')
        <div class="space-y-4">

            {!! $controls ?? '' !!}

        </div>
    @endteleport

    @teleport('#code')
        <div >

            {{ $code ?? '' }}

        </div>
    @endteleport

</div>
