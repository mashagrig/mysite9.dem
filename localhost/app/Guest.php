<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = "guests";
    protected $guarded = [];

    //m-1 (ед) guest
    public function user(){
        return $this->belongsTo("App\User", "user_id", "id");
    }
    //m-1 (ед) guest
    public function subscription(){
        return $this->belongsTo("App\Subscription", "subscription_id", "id");
    }



    //1-m (мн)
    public function comments(){
        return $this->hasMany("App\Comment", "guest_id", "id");
    }

    //1-m (мн)
    public function supports(){
        return $this->hasMany("App\Support", "guest_id", "id");
    }
    //1-m (мн)
    public function singups(){
        return $this->hasMany("App\Singup", "guest_id", "id");
    }
}
