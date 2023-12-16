<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Profile;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::getAll();
        // return $siswa
        return view('backend.siswa.index', compact('siswa'));
    }

    public function create()
    {
        try {
            $kelas = Kelas::all();
            return view('backend.siswa.create', compact('kelas'));
        } catch (\Throwable $th) {
            return redirect(route('user.siswa.index'))->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|min:3',
            'nisn' => 'required|numeric|digits:10|unique:siswas',
            'kelas_id' => 'required|numeric',
        ]);

        try {

            $cek = Siswa::whereNisn($request->post('nisn'))->first();
            if ($cek) {
                return redirect(route('user.siswa.index'))
                    ->with('error', 'Siswa dengan nisn ' . $request->nisn . ' telah terdaftar. Silahkan gunakan NISN lain!');
            }

            Siswa::create($request->except('_token'));
            Profile::create(['nisn' => $request->post('nisn')]);

            return redirect(route('user.siswa.index'))
                ->with('message', 'Siswa baru dengan nisn ' . $request->nisn . ' berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return redirect(route('user.siswa.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    public function show(string $id)
    {
        try {
            $siswa = Siswa::getOne($id);
            if (!$siswa) {
                return redirect(route('user.siswa.index'))->with('error', 'Data siswa tidak ditemukan!');
            }
            $kelas = Kelas::all();
            $jk = [
                'L',
                'P'
            ];
            return view('backend.siswa.show', compact('siswa', 'kelas', 'jk'));
        } catch (\Throwable $th) {
            return redirect(route('user.siswa.index'))->with('error', "Telah terjadi kesalahan. Silahkan coba lagi nanti!");
        }
    }

    public function update(Request $request, string $id)
    {
        // return dd($request->all());
        $request->validate([
            'nama' => 'required|min:3',
            'nisn' => 'required|numeric|digits:10',
            'kelas_id' => 'required|numeric',
            'avatar' => 'nullable|mimes:jpg,svg,png',
            'jenis_kelamin' => Rule::in(['L', 'P']),
            'umur' => 'nullable|max:2',
            'telepon' => 'nullable|string|digits:12',
            'password' => 'nullable|min:8|max:50',
        ]);

        try {
            $cek = Siswa::findOrFail($id);
            if (!$cek) {
                return redirect(route('user.siswa.index'))->with('error', 'Data siswa tidak ditemukan!');
            }

            $cek->update([
                'nisn' => $request->post('nisn'),
                'nama' => $request->post('nama'),
                'kelas_id' => $request->post('kelas_id'),
            ]);

            Profile::updateProfile(
                nisn: $request->post('nisn'),
                data: $request->except([
                    '_token',
                    '_method',
                    'nama',
                    'kelas_id',
                    'avatar',
                    'new_password',
                ])
            );

            return redirect(route('user.siswa.index'))
                ->with('message', 'Data siswa ' . $request->post('nisn') . ' berhasil diperbarui!');
        } catch (\Throwable $th) {
            return redirect(route('user.siswa.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        if (!$siswa) {
            return redirect(route('user.siswa.index'))
                ->with('error', 'Operasi gagal. Data siswa tidak ditemukan!');
        }
        $siswa->delete();
        Profile::whereNisn($siswa->nisn)->delete();
        return redirect(route('user.siswa.index'))
            ->with('message', 'Data dan profile siswa ' . $siswa->siswa . ' berhasil dihapus!');
    }
}
