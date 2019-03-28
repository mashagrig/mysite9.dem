<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";
    protected $guarded = [];

    //1-m (мн)
    public function trainingshedules(){
        return $this->hasMany("App\Trainingshedule", "section_id", "id");
    }
}
