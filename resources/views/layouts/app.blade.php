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
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b><a>Version 1.0.0</a></b> 
        </div>
        <strong><a>Aplikasi Inventory</a></strong> 
    </footer>
    </div>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    @include('layouts.scripts')
</body>
</html>
