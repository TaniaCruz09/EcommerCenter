<?php

namespace App\Models;
namespace App\Models\CategoriaProducto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;
    public function categorias()
    {
        return $this ->belongsTo(CategoriaProducto::class);
    }
}
