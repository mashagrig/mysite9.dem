<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singup extends Model
{
    protected $table = "singups";
    protected $guarded = [];

    //m-1 (ед)
    public function guest(){
        return $this->belongsTo("App\Guest", "guest_id", "id");
    }

    //m-1 (ед)
    public function trainingshedule(){
        return $this->belongsTo("App\Trainingshedule", "trainingshedule_id", "id");
    }


}
