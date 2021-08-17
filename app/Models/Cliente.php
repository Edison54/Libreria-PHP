<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ["ID", "nombre","apellidos", "direccion", "telefono","email"];

    protected $primaryKey = "ID";
}
