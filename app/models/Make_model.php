<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Make_model extends Model
{
    //
    protected $table = 'makes';
    protected $fillable = ['name','description'];
    
    public function models() {
        return $this->hasMany(Model_model::class, 'brand_id', 'id');
    }

    public function buses(){
        return $this->hasMany(BusModel::class,'brand_id','id');
    }

    public function scopeByName($query, $id) {
        return $query->where('id','=',$id);
    }

    public function Att()
    {
        return $this->fillable;
    }
}
