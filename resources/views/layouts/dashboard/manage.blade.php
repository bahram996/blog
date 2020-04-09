<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard') }}/dist/css/bootstrap-theme.css">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{ asset('css/dashboard') }}/dist/css/rtl.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/dashboard') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/dashboard') }}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/dashboard') }}/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard') }}/dist/css/skins/_all-skins.min.css">
    @yield('styles')
<!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="@yield('body-class')" id="app">

    <div class="wrapper">
        @include('layouts.dashboard.header-top')
        @include('layouts.dashboard.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    داشبرد
                    <small>@yield('title')</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                    <li class="active">@yield('title')</li>
                </ol>
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('layouts.dashboard.footer')
    </div>
</div>
<script src="{{ asset('css/dashboard') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('css/dashboard') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('css/dashboard') }}/dist/js/adminlte.min.js"></script>
<script src="{{ asset('js') }}/vue-dashboard.js"></script>
@yield('scripts')
</body>
</html>
