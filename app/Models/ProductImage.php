<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use HasFactory;

    // O Laravel assume 'product_images' por padrão, o que está correto.
    // Se o nome da tabela fosse diferente (ex: 'images_prod'),
    // você usaria: protected $table = 'images_prod';

    protected $primaryKey = 'id_product_image';
    public $timestamps = true;

    protected $fillable = [
        'image_url',
        'title',
        'is_home',
        'id_product',
    ];

    /**
     * Define o relacionamento onde a Imagem pertence a um Produto.
     */
    public function product(): BelongsTo
    {
        // belongsTo(ModeloRelacionado, chave_estrangeira_nesta_tabela, chave_primaria_na_outra_tabela)
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}