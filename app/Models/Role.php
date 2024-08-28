<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $filliable = ["nome"];

    public function resource(){
        return $this->belongsToMany('App\Models\Resource', 'permissions');
    }
}
