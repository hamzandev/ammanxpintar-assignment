<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Profile;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'nama_lengkap' => 'Hamzan Wahyudi',
            'kelas_id' => 1,
        ]);

        User::factory()->create([
            'credential_type' => 'email',
            'name' => 'Hamzan',
            'role' => 'admin',
            'email' => 'admin@mail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
        ]);

        User::factory()->create([
            'credential_type' => 'email',
            'name' => 'Petugas',
            'role' => 'petugas',
            'email' => 'petugas@mail.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
        ]);

        User::factory()->create([
            'credential_type' => 'nisn',
            'name' => 'Siswa',
            'role' => 'siswa',
            'email' => '1234567890',
            'password' => password_hash(1234567890, PASSWORD_DEFAULT),
        ]);

        Profile::factory()->create([
            'user_id' => '1',
            'telepon' => '083477126731',
            'jenis_kelamin' => 'L',
            'umur' => 19,
            'alamat' => 'Jalan aja dulu jadiannya nanti',
        ]);
        Profile::factory()->create([
            'user_id' => '2',
            'telepon' => '083157263712',
            'jenis_kelamin' => 'P',
            'umur' => 32,
            'alamat' => 'Jalan aja dulu jadiannya nanti',
        ]);
        Profile::factory()->create([
            'user_id' => '3',
            'telepon' => '083477126876',
            'jenis_kelamin' => 'L',
            'umur' => 23,
            'alamat' => 'Jalan aja dulu jadiannya nanti',
        ]);
    }
}
