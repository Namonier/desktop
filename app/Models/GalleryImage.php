<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryImage extends Model
{
    use HasFactory;

    // Define o nome da tabela manualmente, pois o Eloquent
    // esperaria 'gallery_images' (plural) por padrão.
    protected $table = 'gallery_image';

    protected $primaryKey = 'id_gallery_image';
    public $timestamps = true;

    protected $fillable = [
        'image_url',
        'description',
        'id_event',
    ];

    /**
     * Define o relacionamento onde a Imagem da Galeria pertence a um Evento.
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'id_event', 'id_event');
    }
}