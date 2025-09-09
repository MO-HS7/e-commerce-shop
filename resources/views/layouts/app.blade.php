<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-commerce Store')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    @yield('styles')
</head>
<body>
    {{-- Header partial  --}}
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    {{-- footer partial --}}
    @include('partials.footer')

    {{--  JS --}}
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('scripts')
</body>
</html>
