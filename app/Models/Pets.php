<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;


class Pets extends Model
{
    use HasFactory;

    protected $table = 'Pets';
    protected $primaryKey = 'id_pet';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillabel =
    [
        'id_pet',
        'nome',
        'idade',
        'descricao'
    ];
}
