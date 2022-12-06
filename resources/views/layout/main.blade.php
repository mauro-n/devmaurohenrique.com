@include('layout.partials.head')
@include('layout.partials.nav')
@include('layout.partials.footer')

@yield('head')
<body>
    @yield('nav')
    @yield('content')
    @yield('foot')
</body>