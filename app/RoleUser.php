<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';

    public function users()
    {
    return $this->hasMany(User::class);
    }

    public function roles()
    {
    return $this->hasMany(Role::class);
    }
}
