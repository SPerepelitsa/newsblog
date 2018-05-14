<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Roles;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function hasPermissions()
    {
//        $roleId = $this->role->id;
//        $permissions = Role::findOrFail($roleId)->permissions();
//
//        return $permissions;// returns Collection with attributes array of permissions
    }

    public function isAdmin()
    {
        return $this->role->name === 'admin';
    }

}
