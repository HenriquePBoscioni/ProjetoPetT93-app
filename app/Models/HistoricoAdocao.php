
<?php



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Adocoes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoricoAdocao extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'HistoricoAdocao';
    protected $primarykey = 'id_HistoricoAdocao';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',


    ];
    protected $fillabel = [
        'id_HistoricoAdocacao',
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
        return $this->belongsTo(Adocoes::class, 'id_adocao', 'id_adocao');
    }
}

