<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = ['total_venta'];

    //Relación 1:1 (1 venta solo pertenece a 1 usuario)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relación 1:1 (1 venta pertenece a 1 detalle_venta)
    public function detalle_venta(): BelongsTo
    {
        return $this->belongsTo(Detalle_venta::class);
    }


}
