<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Detalle_venta extends Model
{
    use HasFactory;
    protected $fillable = ['venta_id', 'producto_id'];

    //Relación 1:1 (1 detalle_venta pertenece a 1 venta)
    public function venta(): BelongsTo
    {
        return $this->belongsTo(Venta::class);
    }

    //Relación 1:1 (1 detalle_venta pertenece a 1 producto)
    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }



}
