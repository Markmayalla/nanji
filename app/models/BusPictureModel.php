<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BusPictureModel extends Model
{
    //
    protected $table = "bus_pictures";
    protected $fillable = ['bus_id','picture'];

    public function buses(){
        return $this->belongsTo(BusModel::class,'bus_id','id');
    }
}
