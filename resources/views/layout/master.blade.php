<!doctype html>
<head>
    @include('layout.header', ['title' => $title])
    @stack('css')
</head>
<body>
    @include('layout.sidebar')
    <div class="overview">
        @yield('content')
    </div>
    @include('sweetalert::alert')
    @stack('js')
</body>
