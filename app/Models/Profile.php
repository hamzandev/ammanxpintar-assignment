<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'telepon',
        'jenis_kelamin',
        'umur',
        'alamat',
        'avatar',
        'password',
    ];

    function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    function kelas()
    {
        return $this->hasOne(Kelas::class);
    }

    public static function updateProfile($nisn, $data) {
        return DB::table('profiles')
            ->whereNisn($nisn)
            ->update($data);
    }
}
