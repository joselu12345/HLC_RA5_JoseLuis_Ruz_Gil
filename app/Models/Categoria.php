<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;
    //protected $table = 'categorias';
    protected $fillable = ['nombre'];

    //Relación 1:1 (1 Producto solo pertenece a una categoria)
    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
