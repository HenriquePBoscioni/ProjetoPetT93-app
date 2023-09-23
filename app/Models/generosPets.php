<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class generosPets extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'GeneroPets';
    protected $primaryKey = 'id_genero';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillabel = [
        'id_genero',
        'id_pet',
        'genero'
    ];

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_pets', 'id_pet');
    }
}
