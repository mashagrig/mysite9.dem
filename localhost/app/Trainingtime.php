<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainingtime extends Model
{
    protected $table = "trainingtimes";
    protected $guarded = [];

    //1-m (мн)
    public function trainingshedules(){
        return $this->hasMany("App\Trainingshedule", "trainingtime_id", "id");
    }
}
