<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman';

    protected $fillable = [
        'judul_pengumuman',
        'deskripsi_pengumuman',
        'created_at',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
 