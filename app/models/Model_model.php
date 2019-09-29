<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Model_model extends Model
{
    //
    protected $table = 'models';
    protected $fillable = ['name','brand_id'];

    public function make() {
        return $this->belongsTo(Make_model::class, 'brand_id','id');
    }

    public function buses(){
        return $this->hasMany(BusModel::class,'model_id','id');
    }

    public function Att()
    {
        return $this->fillable;
    }
}
