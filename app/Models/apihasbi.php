<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apihasbi extends Model
{
    use HasFactory;
    protected $table = 'api';
    protected $fillable = ['judul', 'desc', 'harga'];
}
