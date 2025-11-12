<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // O Eloquent assume 'categories' por padrão, o que está correto.
    
    protected $primaryKey = 'id_categories';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
    ];

    /**
     * Define o relacionamento onde uma Categoria tem muitos Cursos.
     */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class, 'id_categories', 'id_categories');
    }
}