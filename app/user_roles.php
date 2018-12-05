<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_roles extends Model
{
    protected $fillable = [
        'user_id','user_role'
    ];
}
