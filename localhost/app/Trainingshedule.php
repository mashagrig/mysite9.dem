<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainingshedule extends Model
{
    protected $table = "trainingshedules";
    protected $guarded = [];

    //m-1 (ед) trainingshedules
    public function gym(){
        return $this->belongsTo("App\Gym", "gym_id", "id");
    }
    //m-1 (ед) trainingshedules
    public function section(){
        return $this->belongsTo("App\Section", "section_id", "id");
    }
    //m-1 (ед) trainingshedules
    public function trainingtime(){
        return $this->belongsTo("App\Trainingtime", "trainingtime_id", "id");
    }

    //m-1 (ед) trainingshedules
    public function user(){
        return $this->belongsTo("App\User", "user_id", "id");
    }


    //1-m (мн)
    public function singups(){
        return $this->hasMany("App\Singup", "trainingshedule_id", "id");
    }
}
