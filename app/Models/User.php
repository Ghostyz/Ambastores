<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'User_ID'; // Primary key tabel

    // Kolom yang bisa diisi
    protected $fillable = [
        'Username',
        'Password',
        'No_HP',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    protected $casts = [
        'Password' => 'hashed',
    ];
}
