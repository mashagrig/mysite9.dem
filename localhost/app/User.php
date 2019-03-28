<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable  implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $fillable = [
        'id', 'name', 'email', 'password', 'user_personal_info_id', 'user_role_id'
    ];
    //protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //m-1 (ед)
    public function personalinfo(){
        return $this->belongsTo("App\Personalinfo", "fk_users_personalinfo_id", "id");
    }

    //m-1 (ед) users
    public function role(){
       return $this->belongsTo("App\Role", "role_id", "id");
    }



    //1-m (мн)
    public function contents(){
        return $this->hasMany("App\Content", "user_id", "id");
    }

    //1-m (мн)
    public function guests(){
        return $this->hasMany("App\Guest", "user_id", "id");
    }

    //1-m (мн)
    public function trainingshedules(){
        return $this->hasMany("App\Trainingshedule", "user_id", "id");
    }

    //1-m (мн)
    public function supports(){
        return $this->hasMany("App\Support", "user_id", "id");
    }
}
