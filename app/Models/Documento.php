<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $filliable = ["url","descricao","horas_in",
    "status", "comentario","horas_out"];
}
