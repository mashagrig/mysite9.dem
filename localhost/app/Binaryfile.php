<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binaryfile extends Model
{
    protected $table = "binaryfiles";
    protected $guarded = [];

    //1-m
    public function contents(){
        return $this->hasMany("App\Content", "binaryfile_id", "id");
    }
}
