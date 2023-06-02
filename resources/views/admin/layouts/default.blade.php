@include('admin.layouts.head')

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('main')
        @include('admin.layouts.footer')
    </div>
    @include('admin.layouts.script')
</body>

</html>
