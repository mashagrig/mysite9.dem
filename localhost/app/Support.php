<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $table = "supports";
    protected $guarded = [];


    //m-1 (ед)
    public function guest(){
        return $this->belongsTo("App\Guest", "fk_supports_guest_id", "id");
    }
    //m-1 (ед)
    public function user(){
        return $this->belongsTo("App\User", "fk_supports_user_id", "id");
    }
}
