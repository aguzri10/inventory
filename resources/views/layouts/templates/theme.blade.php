<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.templates.head')
<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">
    <!-- <div id="app"> -->
        @include('layouts.templates.header')

        @include('layouts.templates.sidebar')

        <main class="py-4">
            @yield('content')
        </main>
    <!-- </div> -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018 <a href="{{ route('home') }}">Aplikasi Inventory</a>.</strong> All rights
        reserved.
    </footer>
    </div>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    @include('layouts.scripts.scripts')
    @yield('scripts')
</body>
</html>
