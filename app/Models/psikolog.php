<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psikolog extends Model
{
    use HasFactory;

    protected $table = "psikologs";

    protected $fillable =[
        'name','email', 'password', 'nomor_hp', 'tanggal_lahir'
    ];
    
}
