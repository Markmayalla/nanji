<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BusModel extends Model
{
    //
    protected $table = 'buses';
    protected $fillable = [
                            'brand_id','model_id','type_id','floor_id','title','description',
                            'passanger_from',
                            'passanger_to',
                            'seat_from',
                            'seat_to',
                            'no_of_door',
                            'big_descriptioin',
                            'body_type',
                            'wheel_formular',
                            'drive_wheel',
                            'dimensions',
                            'curb',
                            'weight',
                            'front_axle',
                            'main_bridge',
                            'front_suspension',
                            'rear_suspension',
                            'steering',
                            'brake_system',
                            'climate',
                            'engine',
                            'transmission',
                            'tires',
                        ];
    
    public function models() {
        return $this->belongsTo(Model_model::class, 'model_id', 'id');
    }

    public function brands() {
        return $this->belongsTo(Make_model::class, 'brand_id', 'id');
    } 

    public function types() {
        return $this->belongsTo(TypeModel::class, 'type_id', 'id');
    } 

    public function floors() {
        return $this->belongsTo(FloorModel::class, 'floor_id', 'id');
    } 

    public function pictures() {
        return $this->hasMany(BusPictureModel::class, 'bus_id', 'id');
    } 

    public function scopeById($query, $id) {
        return $query->where('id','=',$id);
    }

    public function Att()
    {
        return $this->fillable;
    }
}
