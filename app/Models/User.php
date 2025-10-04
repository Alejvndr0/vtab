<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relación con clientes
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    // Método para verificar el rol
    public function isAdmin()
    {
        return $this->role === 'admin';
        
    }
     public function isjefe()
    {
        
        return $this->role === 'jefe';
    }
    public function isEditor()
{
    return $this->role === 'editor';
}

public function isEmployee()
{
    return $this->role === 'employee';
}
}
