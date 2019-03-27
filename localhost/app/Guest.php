<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = "guests";
    protected $guarded = [];

    //m-1 (ед)
    public function user(){
        return $this->belongsTo("App\User", "fk_guests_user_id", "id");
    }
    //m-1 (ед)
    public function subscription(){
        return $this->belongsTo("App\Subscription", "fk_guests_subscription_id", "id");
    }


    //1-m (мн)
    public function comments(){
        return $this->hasMany("App\Comment", "fk_comments_guest_id", "id");
    }

    //1-m (мн)
    public function supports(){
        return $this->hasMany("App\Support", "fk_supports_guest_id", "id");
    }
    //1-m (мн)
    public function singups(){
        return $this->hasMany("App\Singup", "fk_singups_guest_id", "id");
    }
}
