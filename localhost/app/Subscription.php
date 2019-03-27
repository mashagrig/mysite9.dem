<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = "subscriptions";
    protected $guarded = [];

    //1-m (мн)
    public function guests(){
        return $this->hasMany("App\Guest", "fk_guests_subscription_id", "id");
    }
}
