<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $table = 'g5_member';
    protected $primaryKey = 'mb_id';
    protected $hidden = ['password', 'remember_token'];

    public function role()
    {
      return $this->belongsToMany(Role::class, 'g5_role_admins','mb_id','role_id');
    }
}
