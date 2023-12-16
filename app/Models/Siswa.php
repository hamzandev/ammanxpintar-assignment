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
        'nama',
        'kelas_id',
    ];

    function profile() {
        return $this->hasOne(Profile::class);
    }

    function kelas() {
        return $this->hasOne(Kelas::class);
    }

    public static function getAll() {
        return DB::table('siswas')
            ->join('profiles', 'siswas.nisn', '=', 'profiles.nisn')
            ->join('kelas', 'siswas.kelas_id', '=', 'kelas.id')
            ->select('siswas.*', 'profiles.*', 'kelas.kelas', 'kelas.keterangan')
            ->get();
    }

    public static function getOne($id) {
        return DB::table('siswas')
            ->where('siswas.id', $id)
            ->join('profiles', 'siswas.nisn', '=', 'profiles.nisn')
            ->join('kelas', 'siswas.kelas_id', '=', 'kelas.id')
            ->select('siswas.*', 'profiles.*', 'kelas.kelas', 'kelas.keterangan')
            ->first();
    }


}
