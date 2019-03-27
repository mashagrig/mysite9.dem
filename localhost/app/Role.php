<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    protected $guarded = [];

    public function users(){
        return $this->hasMany("App\User", "user_role_id", "id");
    }

}
