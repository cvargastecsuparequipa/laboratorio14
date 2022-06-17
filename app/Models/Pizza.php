<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Pizza extends Model
{
    use HasFactory;
    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class,'pizzas_ingredientes','id_pizza','id_ingrediente');
    }
}
