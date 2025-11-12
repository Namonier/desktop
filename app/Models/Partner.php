<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_partners';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'website_url',
    ];
}