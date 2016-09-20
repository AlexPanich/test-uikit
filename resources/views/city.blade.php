<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('vendor/uikit/css/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app">
    <form action="/test" method="POST" class="ui form">
        <template v-for="item in items">
            {!! Uikit::searchCity('-n item.name -l Выбрать город -p Название продукта') !!}
        </template>
        <button @click.prevent="addBlock">Добавить еще блок</button>
        <br>
        <button type="submit">Submit</button>
        {{ csrf_field() }}
    </form>
</div>

<script src="{{ asset('vendor/uikit/js/jquery-3.1.0.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/semantic.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/vue.js') }}"></script>
@stack('uikit-scripts')
<script>
    Vue.directive('uikit', {
        bind: function () {
            var script = document.getElementById('script-' + this.expression).innerHTML;
            eval(script);
        }
    });
    new Vue({
        el: '#app',
        data: {
            items: [
                {name: 'search1'}, {name: 'search2'}, {name: 'search3'}
            ]
        },
        methods: {
            'addBlock': function () {
                this.items.push({name: Math.ceil(Math.random()*100000).toString(36)});
            }
        }
    });
</script>
</body>
</html>