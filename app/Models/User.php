<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',        
        'activo',
        'rol',
    ];

    //Relación 1:1 (1 venta solo pertenece a 1 usuario)
    public function venta(): BelongsTo
    {
        return $this->belongsTo(Venta::class);
    }

    //Relación 1:1 (1 compra solo pertenece a 1 usuario)
    public function compra(): BelongsTo
    {
        return $this->belongsTo(Compra::class);
    }

    // //Relación 1:1 (1 usuario pertenece a 1 producto)
    // public function producto(): BelongsTo
    // {
    //     return $this->belongsTo(Producto::class);
    // }

}
