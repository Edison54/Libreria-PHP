<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ["ID", "cantidad","total", "fecha", "isbmLibro","IDcliente"];

    protected $primaryKey = "ID";
}
