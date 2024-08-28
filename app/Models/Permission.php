<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $filliable = ["permission"];

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function resource(){
        return $this->belongsTo('App\Models\Resource');
    }
}
