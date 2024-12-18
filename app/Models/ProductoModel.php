<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoModel extends Model
{
    protected $table= "productos";
    protected $primaryKey = "id_producto";
    public $timestamps = false;
    protected $fillable = ["nombre_producto","precio_producto", "stock_producto", "imagen_producto", "categoria_id","descripcion_producto"];


    public function categoria():BelongsTo{
        return $this->belongsTo(CategoriaModel::class, 'categoria_id', 'id_categoria');
    }
}
