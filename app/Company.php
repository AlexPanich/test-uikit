<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

    public static $type_FizFace = 1;
    public static $type_UrFace = 2;
    public static $type_IP = 3;
    public static $type_Federal = 6;
    public static $type_Local = 5;
    public static $type_Proizvoditel = 4;

    public static $status_Active = 1;
    public static $status_NotActive = 0;

    public function scopeRandomize($query, $limit = 3, $exclude = [])
    {
        $query = $query->whereRaw('RAND()<(SELECT ((?/COUNT(*))*10) FROM `companies`)', [$limit])->orderByRaw('RAND()')->limit($limit);
        if (!empty($exclude)) {
            $query = $query->whereNotIn('id', $exclude);
        }
        return $query;
    }

    public function status() {
        return $this->belongsTo('App\Models\Status','status_id');
    }

    public function type() {
        return $this->belongsTo('App\Models\Type','type_id');
    }

    public function roles() {
        return $this->belongsToMany('App\Models\Role', 'company_role','company_id','role_id')->withPivot('type_id');
    }


}
