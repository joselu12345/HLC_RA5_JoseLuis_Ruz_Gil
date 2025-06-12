<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = ['nombre', 'telefono','email', 'cp', 'sitio_web', 'notas'];

    //Relación 1:1 (1 proveedor pertenece a 1 producto)
    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }

}
