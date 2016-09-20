<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/uikit/css/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="ui container">
    {!! Uikit::lineAjaxModel('-l Компании -n company -ajax /api/v1/company -p Компании -class MyClass -nl') !!}
</div>
<script src="{{ asset('vendor/uikit/js/jquery-3.1.0.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/semantic.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/vue.js') }}"></script>
@stack('uikit-scripts')
</body>
</html>