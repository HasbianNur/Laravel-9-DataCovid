<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'detail', 'kelas', 'alamat', 'suhu', 'vaksin1', 'vaksin2', 'vaksin3', 'covid'
    ];
}
