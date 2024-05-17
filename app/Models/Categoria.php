<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['Edad'];
    public $timestamps = false; 
    

    public function juguetes()
    {
        return $this->belongsToMany(juguete::class);
    }
    
}
