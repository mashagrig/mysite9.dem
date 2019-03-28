<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $table = "supports";
    protected $guarded = [];


    //m-1 (ед)
    public function guest(){
        return $this->belongsTo("App\Guest", "guest_id", "id");
    }
    //m-1 (ед)
    public function user(){
        return $this->belongsTo("App\User", "user_id", "id");
    }
}
