<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    public $table="roles";

    public function permissions(){
        return $this->belongsToMany('\App\Permission', 'permission_role');
    }

    public function givePermissionTo($permission)
    {
            return $this->permissions()->save($permission);

    }
}


