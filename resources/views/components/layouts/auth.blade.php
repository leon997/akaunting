<!DOCTYPE html>
<html dir="{{ language()->direction() }}" lang="{{ app()->getLocale() }}">
    <x-layouts.auth.head>
        <x-slot name="title">
            {!! !empty($title->attributes->has('title')) ? $title->attributes->get('title') : $title !!}
        </x-slot>
    </x-layouts.auth.head>

    @mobile
    <body style="background-color: #1F2023">
    @elsemobile
    <body class="overflow-y-overlay" style="background-color: #1F2023">
    @endmobile

        @stack('body_start')

        <div id="app" class="h-screen lg:h-auto bg-no-repeat bg-cover bg-center" style="background-color: #1F2023">
            @if ( ! Route::is('login'))
                <a href="{{ route('login') }}">
                <x-button
                        type="button"
                        class="relative flex items-center justify-center hover:bg-purple-700 text-white px-3 py-1.5 m-2 text-base rounded-lg disabled:bg-purple-700 sm:col-span-3 font-bold"
                        override="class"
                        data-loading-text="{{ trans('general.loading') }}"
                    >
                        <span class="material-icons-outlined">
                            arrow_back
                            </span>
                    </x-button>
                </a>
            @endif
            <div class="relative w-full lg:max-w-7xl flex items-center m-auto">

                <x-layouts.auth.slider>
                    {!! $slider ?? '' !!}
                </x-layouts.auth.slider>

                <x-layouts.auth.content>
                    {!! $content !!}

                    <x-layouts.auth.footer />
                </x-layouts.auth.content>
            </div>
        </div>

        @stack('body_end')

        <x-layouts.auth.scripts />
    </body>
</html>
