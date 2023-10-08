<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    CONST PRODUCTO_DISPONIBLE = 'disponible';
    CONST PRODUCTO_NO_DISPONIBLE = 'no disponible'

    protected $fillables = [
        'name',
        'description',
        'quantity',
        'status', // disponible o no disponible 
        'image',
        'seller_id',
    ]

    public function estaDispinible (){
        return $this->status == Product::PRODUCTO_DISPONIBLE;
    }
}
