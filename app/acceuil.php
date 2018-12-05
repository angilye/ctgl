<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acceuil extends Model
{
    protected $fillable = [
        'bande','title','contenue','image','link','version','update_by','updated_at'
    ];
}
