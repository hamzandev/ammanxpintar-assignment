<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'nama_lengkap',
        'kelas_id',
    ];

    function kelas() {
        return $this->hasOne(Kelas::class);
    }

    function user() {
        return $this->hasOne(User::class, 'email');
    }

    public static function getAll() {
        return DB::table('siswas')
            ->join('users', 'siswas.nisn', '=', 'users.email')
            ->join('kelas', 'siswas.kelas_id', '=', 'kelas.id')
            ->select('siswas.id as siswa_id','siswas.nama_lengkap', 'siswas.nisn',
                    'siswas.kelas_id', 'siswas.id', 'kelas.kelas',
                    'kelas.keterangan'
            )->get();
    }

    public static function getOne($id) {
        return DB::table('siswas')
            ->where('siswas.id', $id)
            ->join('users', 'siswas.nisn', '=', 'users.email')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->join('kelas', 'siswas.kelas_id', '=', 'kelas.id')
            ->select('*')
            ->first();
    }

    public static function byNisn($nisn) {
        $siswa = self::select(['nisn', 'password'])->from('siswas')->whereNisn($nisn)->first();
        return $siswa;
    }


}
