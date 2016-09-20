<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Param extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $fillable = array('name');


    protected $table = 'params';



    public function status() {
        return $this->belongsTo('App\Models\Status');
    }


    public function values() {
        return $this->hasMany('App\Models\ParamValue');
    }

    public function products_and_params() {
        return $this->hasMany('App\Models\ProductParam');
    }

    public function value() {

        $pivot = $this->hasOne('App\Models\ProductParam')->where('product_id','=', 560);
        $value =  $pivot->getResults()->HasOne('App\Models\ParamValue', 'id', 'param_value_id');

        return $value;
    }

    public function p() {

        return $this->hasOne('App\Models\ProductParam');

    }


    public function newPivot(Model $parent, array $attributes, $table, $exists)
    {
        if ($parent instanceof Category) {
            return new CategoryUserPivot($parent, $attributes, $table, $exists);
        }

        $attributes["value"] = \App\ParamValue::find($attributes["param_value_id"]);

        return parent::newPivot($parent, $attributes, $table, $exists);
    }


    public static function getPPV($product_id, $param_id) {

        $value = new \App\Models\ParamValue();
        $value->value =  NULL;
        $value->id = NULL;

        $pp = \App\Models\ProductParam::where('product_id','=',$product_id)->where('param_id','=',$param_id)->first();

        if (!$pp) return $value;

        $ppv = \App\Models\ProductParamValue::where('product_param_id','=',$pp->id)->first();


        if (!$ppv) return $value;

        $value->value = $ppv->productvalue->value;
        $value->id = $ppv->productvalue->id;


        return $value;
    }





}
