<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'full_name', 'email', 'phone', 'phone2', 'address', 'birth_date',
        'inicio_tramite', 'tipo_tramite', 'destino', 'costo', 'numero_contrato', 'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}