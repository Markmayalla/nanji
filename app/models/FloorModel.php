<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FloorModel extends Model
{
    //
    protected $table = "floors";
    protected $fillable = ['name'];

    public function buses(){
        return $this->hasMany(BusModel::class,'floor_id','id');
    }

    public function Att()
    {
        return $this->fillable;
    }
}
