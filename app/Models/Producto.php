<?php

namespace App\Models;

use App\Http\Controllers\Categorias;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        //'user_id',
        'categoria_id',
        'proveedor_id',
        'codigo',
        'nombre',
        'descripcion',
        'cantidad',
        'precio_compra',
        'precio_venta',
        'activo',
    ];

    //Relación 1:1 (1 producto puede tener 1 categoria)
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    //Relación 1:1 (1 producto solo pertenece a 1 imagen)
    public function imagen(): BelongsTo
    {
        return $this->belongsTo(Imagen::class);
    }

    //Relación 1:1 (1 proveedor pertenece a 1 producto)
    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }

    // //Relación 1:1 (1 usuario pertenece a 1 producto)
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    //Relación 1:1 (1 compra pertenece a 1 producto)
    public function compra(): BelongsTo
    {
        return $this->belongsTo(Compra::class);
    }

    //Relación 1:1 (1 detalle_venta pertenece a 1 producto)
    public function detalle_venta(): BelongsTo
    {
        return $this->belongsTo(Detalle_venta::class);
    }


    // //Atributo personalizado: stock
    // protected function stockLabel() : Attribute {
    //     return Attribute::make(
    //         get: function () {
    //             return $this->attributes['stock'] >= $this->attributes['min_stock'] ? 
    //                 '<span class="badge badge-pill badge-success">'.$this->attributes['stock'].'</span>' : 
    //                 '<span class="badge badge-pill badge-danger">'.$this->attributes['stock'].'</span>';
    //         }
    //     );
    // }

    // //Atributo personalizado: precio
    // protected function priceLabel() : Attribute {
    //     return Attribute::make(
    //         get: function () {
    //             return '<b>$'.number_format($this->attributes['purchase_price'],0,',','.').'</b>'; 
    //         }
    //     );
    // }

    // //Atributo personalizado: estado
    // protected function activeLabel() : Attribute {
    //     return Attribute::make(
    //         get: function () {
    //             return $this->attributes['active'] ? '<span class="badge badge-success">Activo</span>' : '<span class="badge badge-warning">Inactivo</span>';             }
    //     );
    // }
}
