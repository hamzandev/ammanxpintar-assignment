<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas',
        'keterangan'
    ];

    function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
