<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Psikolog extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = "psikologs";

    protected $fillable =[
        'name','email', 'password', 'nomor_hp', 'tanggal_lahir'
    ];
    
}
