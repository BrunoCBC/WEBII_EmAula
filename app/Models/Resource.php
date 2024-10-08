<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $filliable = ["nome"];

    public function role(){
        return $this->belongsToMany('App\Models\Role', 'permissions');
    }
}
