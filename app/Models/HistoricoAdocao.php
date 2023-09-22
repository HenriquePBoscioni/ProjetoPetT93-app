
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\adocoes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoricoAdocao extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'historico_adocao';
    protected $primarykey = 'id_historico_adocao';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',


    ];
    protected $fillabel = [
        'id_historico_adocacao',
        'id_adocao',
        'dt',
        'historico'
    ];


    /**
     * Get the user that owns the historico_adocao
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adocao(): BelongsTo
    {
        return $this->belongsTo(adocoes::class, 'id_adocao', 'id_adocao');
    }
}
>>>>>>> Rafael
