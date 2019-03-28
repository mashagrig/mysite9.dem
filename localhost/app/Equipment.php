<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';//первая связываемая таблица
    protected $guarded = [];

    public function gyms(){
        return $this->belongsToMany("App\Equipment", "equipment_gym", "gym_id", "equipment_id");

        //это первая связываемая таблица, поэтому прописываем связующую таблицу, поле первой (имя второй_id), поле второй (имя первой_id)
    }
}
