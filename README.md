<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Castify (Aplikasi Ujian Online)

### Tech Stack & Plugins :
1. Core :
    - (Laravel)[https://laravel.com/docs/10.x]
    - (Laravel Socialite)[https://laravel.com/docs/10.x/socialite#installation]
2. Third Party :
    - (Laravel Spatie)[https://spatie.be/docs/laravel-permission/v6/installation-laravel]

3. UI Framework & Templates
    - (Bootstrap)[https://getbootstrap.com/docs/5.3/getting-started/introduction/]
    - (JQuery)[https://jquery.com/download/]
    - (Tabler)[https://tabler.io/docs/getting-started]

### Feature :
- Auth :
    - Registrasi (dengan Email & Password, dengan Google)
    - Login (dengan Email & Password, dengan Google)
    - Logout
    - Role :
        - Admin (Guru atau Staff) :
            - Login dengan Email & Password
            - CRUD Data Siswa, Mapel, Kelas, Ujian 
            - Laporan
        - Siswa :
            - Login dengan NISN
            - Access Ujian

- Database :
    - Tables :
        - User (Guru atau Staff)
            - id (PK, AI)
            - nama
            - email -> unique
            - password -> null
            - avatar -> null
            - google_id -> null
            - google_token -> null
            - google_refresh_token -> null

        - Siswa
            - id (PK, AI)
            - nisn -> unique
            - nama
            - id_profil (FK)
        - Mapel
            - id (PK, AI)
            - mapel -> uniqe
            - deskripsi -> null
        - Kelas
            - id (PK, AI)
            - mapel -> uniqe
            - deskripsi -> null
        - Profil :
            - id (PK, AI)
            - telepon
            - alamat
            - jenis_kelamin
            - umur
            - id_kelas (FK)
        - Ujian :
            - id (PK, AI)
            - nama_ujian
            - tgl_ujian
            - id_soal (FK)
            - id_mapel (FK)
            - id_sesi (FK)
        - Sesi :
            - id (PK, AI)
            - sesi

    - Relations :
            1. Siswa -> Profil
            2. Siswa -> Kelas
            3. Ujian <-> Sesi
            4. Ujian <-> Mapel
            4. Ujian <-> Soal
