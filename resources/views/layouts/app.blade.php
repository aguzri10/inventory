<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">
    <!-- <div id="app"> -->
        @include('layouts.header')

        @include('layouts.sidebar')

        <main class="py-4">
            @yield('content')
        </main>
    <!-- </div> -->
    </div>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    @include('layouts.scripts')
</body>
</html>
