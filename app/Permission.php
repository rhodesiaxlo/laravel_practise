<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Permission extends Authenticatable
{
    public $timestamps = false;
    public $table="permission";

    public function roles(){
        return $this->belongsToMany('\App\Role', 'permission_role', 'permission_id', 'role_id');
    }
}
