<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarmahasiswa extends Model
{
    protected $table = 'daftarmahasiswa';
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'birth_date',
        'religion',
        'address',
        'program_study',
        'entry_path',
        'payment_proof',
        'status'
    ];

    // Kolom yang diperlakukan sebagai tanggal
    protected $dates = ['birth_date', 'created_at', 'updated_at'];
}
