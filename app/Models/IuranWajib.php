<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IuranWajib extends Model
{
    use HasFactory;

    protected $table = 'iuran_wajib';
    protected $fillable = [
         'nominal', 'wilayah', 'image',
    ];
}
