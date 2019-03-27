<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainingshedule extends Model
{
    protected $table = "trainingshedules";
    protected $guarded = [];

    //m-1 (ед)
    public function gym(){
        return $this->belongsTo("App\Gym", "fk_trainingshedules_gym_id", "id");
    }
    //m-1 (ед)
    public function section(){
        return $this->belongsTo("App\Section", "fk_trainingshedules_section_id", "id");
    }
    //m-1 (ед)
    public function trainingtime(){
        return $this->belongsTo("App\Trainingtime", "fk_trainingshedules_trainingtime_id", "id");
    }

    //m-1 (ед)
    public function user(){
        return $this->belongsTo("App\User", "fk_trainingshedules_user_id", "id");
    }


    //1-m (мн)
    public function singups(){
        return $this->hasMany("App\Singup", "fk_singups_trainingshedule_id", "id");
    }
}
