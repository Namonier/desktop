<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_event';
    public $timestamps = true;
    public $incrementing = true;
    protected $keyType = 'int';


    protected $fillable = [
        'title',
        'address',
        'description',
        'description_long',
        'price',
        'event_datetime',
        'location',
    ];
    
    

    /**
     * Define o relacionamento onde um Evento tem muitas Imagens de Galeria.
     */
    public function galleryImages()
    {
        return $this->hasMany(\App\Models\GalleryImage::class, 'id_event');
    }

    
}