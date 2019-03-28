<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $guarded = [];

    //m-1 (ед)
    public function guest(){
        return $this->belongsTo("App\Guest", "guest_id", "id");
    }
}
