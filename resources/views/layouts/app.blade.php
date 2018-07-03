<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('meta_title', 'Platform') | Dezeen Judging</title>

        @include('partials.fonts')

        <script type="text/javascript">
            var APP_URL = '{{ env('APP_URL') }}';
            var CSRF_TOKEN = '{{ csrf_token() }}';
        </script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.1.0/nouislider.min.css" />
        <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
        <main id="app" class="main">

            {{-- @include('partials.loader') --}}

            @include('partials.header')

            @include('partials.sidebar')

            <section class="content">

                    @yield('header')

                    @include('partials.messages')

                    @yield('content')

                    @include('partials.footer')

                </section>
        </main>

        @include('partials.ie-warning')
        
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.1.0/nouislider.min.js"></script>


        @yield('footer_javascript')

    </body>
</html>