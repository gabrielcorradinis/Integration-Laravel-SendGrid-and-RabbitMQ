<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo',
        'emailRemetente',
        'emailDestinatario',
        'status',
        'conteudo',
    ];

    protected $attributes = [
        'status' => 'aguardando',
    ];
}
