<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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

    public static function updateProfile($userId, $data) {
        return DB::table('profiles')
            ->whereUserId($userId)
            ->update($data);
    }
}
