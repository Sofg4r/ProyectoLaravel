<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juguete extends Model
{
    protected $fillable = ['Marca', 'Precio'];
    public $timestamps = false; 

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
