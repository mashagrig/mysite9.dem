<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personalinfo extends Model
{
    protected $table = "personalinfos";
    protected $guarded = [];

    public function users(){
        return $this->hasMany("App\User", "fk_users_personalinfo_id", "id");
    }
}
