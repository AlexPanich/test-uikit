<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/test', function(Request $request) {
   dd($request->all());
});

Route::get('/ajax', function(Request $request) {
    $result = $request->has('name') && $request->has('value');
    return response()->json([
        'success' => $result
    ]);
});

Route::get('/live', function() {
     return view('live');
});

Route::get('/vue', function() {
    return view('vue'); 
});

Route::get('/vueinvue', function(){
    return view('vueinvue');
});

Route::get('/v2', function() {
    return view('welcomevue');
});

Route::get('/city', function() {
    return view('city'); 
});

Route::get('/cityone', function() {
    $defaultCity = [
        'id' => '23',
        'name' => 'Зеленоград',
        'type' => 'location'
    ];
    return view('cityone', compact('defaultCity'));
});

Route::get('/line', function() {
   return view('line');
});

Route::any('/api/v1/company', function() {
    return response()->json(json_decode('{"success":true,"items":{"total":78,"per_page":"25","current_page":1,"last_page":4,"next_page_url":"http://agro/api/v1/company?page=2","prev_page_url":null,"from":1,"to":25,"data":[{"id":1,"name":"АГРО24","description":null,"status_id":2403,"type_id":20,"created_at":"2016-06-15 12:27:24","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":2,"name":"Дикси","description":"2","status_id":2403,"type_id":20,"created_at":"2016-06-10 14:16:18","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":3,"name":"Народный","description":null,"status_id":null,"type_id":null,"created_at":null,"updated_at":null,"status_name":"","company_name":"","type":null,"status":null},{"id":5,"name":"Утконос","description":"1","status_id":2403,"type_id":20,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":6,"name":"Метро","description":"4","status_id":2403,"type_id":20,"created_at":"2016-06-10 14:16:18","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":7,"name":"Седьмой континент","description":"5","status_id":2403,"type_id":20,"created_at":"2016-06-10 14:16:18","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":8,"name":"Ашан","description":"6","status_id":2403,"type_id":20,"created_at":"2016-06-10 14:16:18","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":9,"name":"АБК","description":"7","status_id":2403,"type_id":20,"created_at":"2016-06-10 14:16:18","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10,"name":"ООО МОЛОЧНАЯ ФАБРИКА","description":"8","status_id":2403,"type_id":20,"created_at":"2016-06-10 14:16:18","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":11,"name":"Верный","description":null,"status_id":null,"type_id":null,"created_at":null,"updated_at":null,"status_name":"","company_name":"","type":null,"status":null},{"id":13,"name":"АБК","description":"","status_id":2403,"type_id":20,"created_at":"2016-06-10 14:16:18","updated_at":"2016-06-20 06:59:59","status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":15,"name":"Атак","description":null,"status_id":2403,"type_id":20,"created_at":null,"updated_at":null,"status_name":"Активна","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10193,"name":"РОМАШКА","description":null,"status_id":null,"type_id":20,"created_at":"2016-07-29 16:56:20","updated_at":"2016-07-29 16:56:20","status_name":"","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":null},{"id":10194,"name":"ФЗ Дима","description":null,"status_id":2403,"type_id":19,"created_at":"2016-07-29 18:55:26","updated_at":"2016-07-29 18:55:26","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10195,"name":"ГАЗПРОМ","description":null,"status_id":null,"type_id":20,"created_at":"2016-07-29 18:55:51","updated_at":"2016-07-29 18:55:51","status_name":"","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":null},{"id":10196,"name":"ФЗ Иван","description":null,"status_id":2403,"type_id":19,"created_at":"2016-08-01 10:34:47","updated_at":"2016-08-01 10:34:47","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10197,"name":"Новая компания","description":null,"status_id":null,"type_id":20,"created_at":"2016-08-01 10:36:17","updated_at":"2016-08-01 10:36:17","status_name":"","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":null},{"id":10198,"name":"Новая компания","description":null,"status_id":null,"type_id":20,"created_at":"2016-08-01 10:36:32","updated_at":"2016-08-01 10:36:32","status_name":"","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":null},{"id":10199,"name":"Новая компания","description":null,"status_id":null,"type_id":20,"created_at":"2016-08-01 10:39:00","updated_at":"2016-08-01 10:39:00","status_name":"","company_name":"","type":{"id":20,"code":"2","table":"companies","name":"Компания","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:39","updated_at":"2016-06-20 06:58:39"},"status":null},{"id":10200,"name":"ФЗ sdfsdfsdf","description":null,"status_id":2403,"type_id":19,"created_at":"2016-08-01 10:57:28","updated_at":"2016-08-01 10:57:28","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10201,"name":"ФЗ sdfsdf","description":null,"status_id":2403,"type_id":19,"created_at":"2016-08-01 11:02:23","updated_at":"2016-08-01 11:02:23","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10202,"name":"ФЗ sdfsff","description":null,"status_id":2403,"type_id":19,"created_at":"2016-08-01 11:48:13","updated_at":"2016-08-01 11:48:13","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10203,"name":"ФЗ sdfsdf","description":null,"status_id":2403,"type_id":19,"created_at":"2016-08-01 13:14:20","updated_at":"2016-08-01 13:14:20","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10204,"name":"ФЗ выаыа","description":null,"status_id":2403,"type_id":19,"created_at":"2016-08-01 13:24:54","updated_at":"2016-08-01 13:24:54","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}},{"id":10205,"name":"ФЗ Ольга","description":null,"status_id":2403,"type_id":19,"created_at":"2016-08-01 19:59:02","updated_at":"2016-08-01 19:59:02","status_name":"Активна","company_name":"","type":{"id":19,"code":"1","table":"companies","name":"Физическое лицо","field":null,"value":"","description":null,"created_at":"2016-06-20 06:58:21","updated_at":"2016-06-20 06:58:21"},"status":{"id":2403,"code":"1","table":"companies","name":"Активна","field":null,"value":"1","description":null,"created_at":"2016-06-13 16:18:03","updated_at":"2016-06-13 16:18:03"}}]}}'));
});

Route::get('/cityajax', function() {
    return response()->json([
        'success' => true,
        'items' => [
            [
                'name' => 'Москва',
                'id' => 12,
                'type' => 'region',
                'desc' => 'Большой город'
            ],
            [
                'name' => 'Самара',
                'id' => 14,
                'type' => 'region',
                'desc' => 'Грязный город'
            ],
            [
                'name' => 'Санкт-Петербург',
                'id' => 15,
                'type' => 'region',
                'desc' => 'Культурный город'
            ],
            [
                'name' => 'Ярославль',
                'id' => 42,
                'type' => 'region',
                'desc' => 'Красивый город'
            ],
            [
                'name' => 'Долгопрудный',
                'id' => 132,
                'type' => 'region',
                'desc' => 'Просто город'
            ],
            [
                'name' => 'Тольяти',
                'id' => 122,
                'type' => 'region',
                'desc' => 'Широкий город'
            ]

        ]
    ]);
});


Route::any('/api/sys/searchProduct40', function (Request $request, $name = null) {

    $name = $name == null ? trim($request->get('name')) : $name;
    $name = str_replace("%", " ", $name);

    $this->options = ["name" => $name];

    //GET RES
    if (strlen($name) == 0) return ["success" => false, "error" => "empty name"];

    $model = \App\Product::class;

    //Опции

    $P01 = 6;

    $P02 = 6;

    $P04 = 10;

    $allow_fields = ["id", "value", "name","measure_id","type_tovar_product"];

    $query = $model::query();

    $query->where('name','LIKE', '%' . $name . '%');
    $query->with("params");
    $query->with("measure");
    $query->with("country");

    $query->limit($P01);

    $query->select($allow_fields);

    $products = $query->paginate();

    //TODO оптимизировать
    foreach($products as &$product) {



        if ($product->type_tovar_product == 0) {

            $product->desc = $product->value . " " . $product->measure->name;

        }
        else
        {
            $mesureName = $product->measure->name ?? "";

            $desc = [];

            if ($product->value != "")
                $desc[] = $product->value . " " . $mesureName;

            $desc[] = "Россия";

            foreach($product->params as $param)
            {
                $val = $param->pivot->value;

                if ($val != null)
                    $desc[] = $val->value;
            }

            $desc = implode(", ", $desc);

            $product->desc = $desc;


        }

        $product->setHidden(['params','measure_id','value']);


    }

    $data = $products->toArray()["data"];
    $count = $products->toArray()["total"];

    $resp =  ["success" => true, "P01" => $P01, "P04" => $P04, "total" => $count, "items" => $data] ;

    return $resp;
});
