<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {

        return $this->hasMany('App\Models\User');

    }

    public function permissions()
    {

        return $this->belongsToMany('App\Models\Permission', 'roles_permissions');

    }

    public function getRole(string $name) {

        $role = DB::table('roles')->where('name', $name)->first();

        if(is_null($role)) {

            return 'There is no such role';
        }

           return $role;
    }
}
