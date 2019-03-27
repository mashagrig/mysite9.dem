<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_info extends Model
{
    protected $table = "personal_infos";
    protected $guarded = [];
    public function users(){
        return $this->hasMany("App\User", "user_personal_info_id", "id");
    }
}
