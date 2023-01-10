<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Sanctum\HasApiTokens;
class Artikel extends Model
{
    use HasFactory;

    protected $table = "artikels";

    protected $fillable =[
        'judul','image', 'konten'
    ];


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
