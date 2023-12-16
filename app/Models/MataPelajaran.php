<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public static function getAll() {
        return DB::table('mata_pelajarans')->paginate(10);
    }
}
