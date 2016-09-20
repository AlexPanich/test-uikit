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
    <div v-for="item in items">
        {!! Uikit::live('-n item.name -ajax item.ajax') !!}
    </div>
    <button type="button" @click="addBlock">Add input</button>
</div>

<script src="{{ asset('vendor/uikit/js/jquery-3.1.0.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/semantic.min.js') }}"></script>
<script src="{{ asset('vendor/uikit/js/vue.js') }}"></script>
@stack('uikit-scripts')
<script>
    Vue.directive('uikit', {
        bind: function (type) {
            var script = document.getElementById('script-' + this.expression).innerHTML;
            eval(script);
        }
    });
    new Vue({
        el: '#app',
        data: {
            items: [
                {name: 'input1', ajax: '/ajax'}, {name: 'input2', ajax: '/ajax'}, {name: 'input3', ajax: '/ajax'}
            ]
        },
        methods: {
            'addBlock': function () {
                this.items.push({name: 'v' + Math.ceil(Math.random()*100000).toString(36), ajax: '/ajax'});
            }
        }
    });
</script>
</body>
</html>