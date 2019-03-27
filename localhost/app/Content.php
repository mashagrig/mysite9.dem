<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = "contents";
    protected $guarded = [];

    //m-1 (ед)
    public function user(){
        return $this->belongsTo("App\User", "fk_contents_user_id", "id");
    }

    //m-1 (ед)
    public function binaryfile(){
        return $this->belongsTo("App\Binaryfile", "fk_contents_binaryfile_id", "id");
    }
}
