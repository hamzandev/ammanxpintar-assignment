<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Profile;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Kelas::factory()->create([
            'kelas' => 'X',
            'keterangan' => 'Kelas Sepuluh'
        ]);

        MataPelajaran::factory()->create([
            'nama' => 'Bahasa Indonesia',
            'keterangan' => 'Bahasa Indonesia itu sangat menyenangkan lhoo!',
        ]);

        Siswa::factory()->create([
            'nisn' => '1234567890',
            'nama' => 'Hamzan Wahyudi',
            'kelas_id' => 1,
        ]);

        Profile::factory()->create([
            'nisn' => '1234567890',
            'alamat' => 'Jalan aja dulu jadiannya nanti',
            'telepon' => '083477126731',
            'jenis_kelamin' => 'L',
            'umur' => 19,
        ]);
    }
}
