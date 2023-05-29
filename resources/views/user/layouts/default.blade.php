@include('user.layouts.head')

<body class="layout-top-nav light-skin theme-primary">

    <div class="wrapper">
        <div id="loader"></div>

        @include('user.layouts.navbar')

        @include('user.layouts.sidebar')

        <div class="content-wrapper">
            <div class="container-full">
                @yield('main')
            </div>
        </div>

        @include('user.layouts.footer')

        <div class="control-sidebar-bg"></div>
    </div>

    @include('user.layouts.script')

    @yield('script')
</body>

</html>
