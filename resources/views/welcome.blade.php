<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('vendor/uikit/css/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="ui container">
    <div class="ui segment">
        <div class="ui form">
            {{--{!! Uikit::text('-n name -p Введите что нибудь -l Text') !!}--}}
            {{--{!! Uikit::password('-n password -l Password') !!}--}}
            {{--{!! Uikit::email('-n email -l Email') !!}--}}
            {{--{!! Uikit::date('-n date -l Date') !!}--}}
            {{--{!! Uikit::number('-n number -l Number') !!}--}}
            {{--{!! Uikit::checkbox('-n check -l Checkbox -c') !!}--}}
            {{--{!! Uikit::checkboxSlider('-n checkSlider -l Checkbox_slider') !!}--}}
            {{--{!! Uikit::checkboxToggle('-n checkToggle -l Checkbox_toggle -c') !!}--}}
            {!! Uikit::radio('-n radio -l first') !!}
            {!! Uikit::radio('-n radio -l second') !!}
            {!! Uikit::radio('-n radio -l third') !!}
            {{--{!! Uikit::radioSlider('-n radio2 -l first') !!}--}}
            {{--{!! Uikit::radioSlider('-n radio2 -l second') !!}--}}
            {{--{!! Uikit::radioSlider('-n radio2 -l third') !!}--}}
            {{--{!! Uikit::radioToggle('-n radio3 -l first') !!}--}}
            {{--{!! Uikit::radioToggle('-n radio3 -l second') !!}--}}
            {{--{!! Uikit::radioToggle('-n radio3 -l third') !!}--}}
            {{--<hr>--}}
            {{--{!! Uikit::button('-tx Зарегистрироваться -class disable -w_class test') !!}--}}
            {{--{!! Uikit::searchProduct('-n search -l Найти продукт -p Название продукта') !!}--}}
            {{--<hr>--}}
            {{--<br>--}}
            <form action="/test" method="POST">
                {{ csrf_field() }}
                {!! Uikit::searchProductMulti('-n searchMulti -l Выбрать много продуктов -p Название продукта') !!}
                <br><br>
                {!! Uikit::searchProductMulti('-n searchMulti2 -l Выбрать много продуктов -p Название продукта') !!}
                <br><br>
                <button type="submit">submit</button>
            </form>
            {{--{!! Uikit::searchCityOne('-n searchCity -l Выбрать город -p Название города -ajax /cityajax') !!}--}}
            {{--{!! Uikit::model('-n model -m \App\Company') !!}}--}}
        </div>
    </div>
</div>
<script src="{{ asset('vendor/uikit/js/jquery-3.1.0.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/semantic.min.js') }}"></script>
@stack('uikit-scripts')
</body>
</html>
