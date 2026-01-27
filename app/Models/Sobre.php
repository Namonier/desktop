<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sobre
 *
 * @property int $id
 * @property string $texto
 * @property string $endereco
 * @property string $email
 * @property string $telefone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Sobre extends Model
{
    protected $table = 'sobre';

    /**
     * @var string
     */
    protected $connection = 'sqlite';

    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'texto',
        'endereco',
        'email',
        'telefone',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'texto' => 'string',
            'endereco' => 'string',
            'email' => 'string',
            'telefone' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
