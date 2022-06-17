<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class,'pizzas_ingredientes','id_ingrediente','id_pizza');
    }
}
