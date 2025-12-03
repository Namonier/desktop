<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_courses';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'modality',
        'description',
        'duration',
        'id_categories',
    ];

    /**
     * Define o relacionamento onde o Curso pertence a uma Categoria.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categories', 'id_categories');
    }


    /**
     * Define o relacionamento Muitos-para-Muitos com Professores.
     * Um curso pode ter muitos professores designados.
     */
    public function teachers(): BelongsToMany
    {
        // belongsToMany(ModeloRelacionado, tabela_pivot, chave_deste_modelo_na_pivot, chave_do_outro_modelo_na_pivot)
        return $this->belongsToMany(
            Teacher::class,     // Modelo relacionado
            'designated',       // Nome da tabela pivot
            'id_courses',       // Chave estrangeira do Course na pivot
            'id_teacher'        // Chave estrangeira do Teacher na pivot
        );
    }
    
}