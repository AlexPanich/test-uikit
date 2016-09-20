<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

    public function scopeTovar($query)
    {
        return $query->where('type_tovar_product', '=', 1);
    }

    public function scopeRandomize($query, $limit = 3, $exclude = [])
    {
        $query = $query->whereRaw('RAND()<(SELECT ((?/COUNT(*))*10) FROM `products`)', [$limit])->orderByRaw('RAND()')->limit($limit);
        if (!empty($exclude)) {
            $query = $query->whereNotIn('id', $exclude);
        }
        return $query;
    }

    public function status() {
        return $this->belongsTo('App\Status');
    }

    public function links() {
        return $this->hasMany('App\ProductTempSync');
    }

    public function links2() {
        return $this->hasManyThrough('App\ProductTemp', 'App\ProductTempSync','product_id','id','product_id');
    }

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function photos() {
        return $this->belongsToMany('App\Photo', 'product_photo');

    }


    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function tovars() {
         return $this->hasMany('App\Product', 'product_id');
   }


    public function product() {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function product_param() {
        return $this->hasMany('App\ProductParam', 'product_id');
    }

    public function params() {
        return $this->belongsToMany('App\Param', 'product_param')->withPivot('param_value_id','id', 'type1_id', 'type2_id');
    }


    public function measure() {
        return $this->belongsTo('App\Measure');
    }

    public function categories() {
        return $this->belongsToMany('App\ProductCategory', 'product_product_category', 'product_id', 'product_category_id');
    }


    public function description($locality_id)
    {
        //TODO GUI
        $measure_name = $this->measure->name ?? "";
        $measure_value = $this->value ?? "";

        //Country

        $countryName = "";
        if ($locality_id != null) {

            $locality = \App\Models\Locality::where('id','=',$locality_id)->first();

            $countryName = $locality->name;

        }

        //DESCRIPTION
        $description = [];

        if ($measure_name != "" ) $description[] = $measure_value . " " .$measure_name;


        $description[] = $countryName;

        //

        return implode(", ", $description);
    }

    public function getDescriptionAttribute()
    {
        $measure_name = $this->measure->name ?? "";
        $measure_value = $this->value ?? "";

        //Country

        $countryName = "";
        if ($this->locality_id != null) {

            $locality = \App\Models\Locality::where('id','=',$this->locality_id)->first();

            $countryName = $locality->name;

        }

        //DESCRIPTION
        $description = [];

        if ($measure_name != "" ) $description[] = $measure_value . " " .$measure_name;


        if ($countryName != "")
            $description[] = $countryName;

        //

        return implode(", ", $description);
    }






}
