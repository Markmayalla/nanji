<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    //
    protected $table = "types";
    protected $fillable = ['name'];

    public function buses(){
        return $this->hasMany(BusModel::class,'type_id','id');
    }

    public function Att()
    {
        return $this->fillable;
    }
}
