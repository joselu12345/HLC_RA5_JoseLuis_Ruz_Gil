<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'producto_id','cantidad', 'precio_compra'];

    //Relación 1:1 (1 compra pertenece a 1 usuario)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relación 1:1 (1 compra pertenece a 1 producto)
    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
