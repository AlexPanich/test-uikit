<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('vendor/uikit/css/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="ui container">
    {!! Uikit::searchCityOne('-n searchCity -l Выбрать город -p Название города -ajax /cityajax', [], $defaultCity) !!}
</div>
<script src="{{ asset('vendor/uikit/js/jquery-3.1.0.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/semantic.min.js') }}"></script>
@stack('uikit-scripts')
</body>
</html>
