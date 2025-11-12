<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_teacher';
    public $timestamps = true;

    protected $fillable = [
        'description',
        'name',
        'photo',
    ];

    /**
     * Define o relacionamento Muitos-para-Muitos com Cursos.
     * Um professor pode ser designado para muitos cursos.
     */
    public function courses(): BelongsToMany
    {
        // belongsToMany(ModeloRelacionado, tabela_pivot, chave_deste_modelo_na_pivot, chave_do_outro_modelo_na_pivot)
        return $this->belongsToMany(
            Course::class,      // Modelo relacionado
            'designated',       // Nome da tabela pivot
            'id_teacher',       // Chave estrangeira do Teacher na pivot
            'id_courses'        // Chave estrangeira do Course na pivot
        );
    }
}