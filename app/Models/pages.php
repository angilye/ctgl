<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $fillable = [
        'name','update_by','content','versions','updated_at'
    ];
}
