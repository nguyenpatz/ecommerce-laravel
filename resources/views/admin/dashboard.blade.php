<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css')}}">
</head>

<body>

    {{-- header --}}
    @include('layouts.header')
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- sidebar --}}
    <div class="d-flex main-content">
        @include('layouts.sidebar')
        @yield('content')
    </div>
    {{-- footer --}}
    @include('layouts.footer')
</body>
{{-- bootstrap js and jquery js --}}
<script src="{{ asset('js/app.js') }}"></script>
{{-- font awesome --}}
<script src="{{ asset('js/font-awesome/all.min.js')}}"></script>
</html>
