<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $fillable = ['nombres','apellidos','titulo_universitario','edad','fecha_contrato','foto','doc_identidad'];
    use HasFactory;
}
