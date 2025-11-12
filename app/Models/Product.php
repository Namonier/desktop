<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_product';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description_long',
        'description_short',
        'price',
    ];

    /**
     * Define o relacionamento onde um Produto tem muitas Imagens de Produto.
     */
    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'id_product', 'id_product');
    }
}