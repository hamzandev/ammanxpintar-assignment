<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Profile;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function Pest\Laravel\json;

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
            return redirect(route('master-data.siswa.index'))->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_lengkap' => 'required|min:3',
            'nisn' => 'required|numeric|digits:10|unique:siswas',
            'kelas_id' => 'required|numeric',
        ]);

        try {

            $cek = Siswa::whereNisn($request->post('nisn'))->first();
            if ($cek) {
                return redirect(route('master-data.siswa.index'))
                    ->with('error', 'Siswa dengan nisn ' . $request->nisn . ' telah terdaftar. Silahkan gunakan NISN lain!');
            }

            Siswa::create($request->except('_token'));

            $createdUser = User::create([
                'credential_type' => 'nisn',
                'name' => $request->post('nama_lengkap'),
                'email' => $request->post('nisn'),
                'password' => password_hash($request->post('nisn'), PASSWORD_DEFAULT),
            ]);

            Profile::create(['user_id' => $createdUser->id]);

            return redirect(route('master-data.siswa.index'))
                ->with('message', 'Siswa baru dengan nisn ' . $request->nisn . ' berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return redirect(route('master-data.siswa.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    public function show(string $id)
    {
        try {
            $siswa = Siswa::getOne($id);

            if (!$siswa) {
                return redirect(route('master-data.siswa.index'))->with('error', 'Data siswa tidak ditemukan!');
            }
            $kelas = Kelas::all();
            $jk = [
                'L',
                'P'
            ];
            return view('backend.siswa.show', compact('siswa', 'kelas', 'jk'));
        } catch (\Throwable $th) {
            return redirect(route('master-data.siswa.index'))->with('error', "Telah terjadi kesalahan. Silahkan coba lagi nanti!");
        }
    }

    public function update(Request $request, $nisn)
    {
        // return dd($nisn);
        $request->validate([
            'nama_lengkap' => 'required|min:3',
            'nisn' => 'required|numeric|digits:10',
            'kelas_id' => 'required|numeric',
            'avatar' => 'nullable|mimes:jpg,svg,png',
            'jenis_kelamin' => Rule::in(['L', 'P']),
            'umur' => 'nullable|max:2',
            'telepon' => 'nullable|string|digits:12',
            'new_password' => 'nullable|min:8|max:50',
        ]);

        try {
            $cek = Siswa::whereNisn($nisn)->first();
            if (!$cek) {
                return redirect(route('master-data.siswa.index'))->with('error', 'Data siswa tidak ditemukan!');
            }

            $cek->update([
                'nisn' => $request->post('nisn'),
                'nama_lengkap' => $request->post('nama_lengkap'),
                'kelas_id' => $request->post('kelas_id'),
            ]);
            $updatedUser = User::whereEmail($cek->nisn)->first();
            // return dd($updatedUser);

            $userProfile = Profile::whereUserId($updatedUser->id)->first();
            $updatedUser->update([
                // 'name' => $request->post('name'),
                'avatar' => $request->post('avatar'),
                'email' => $request->post('nisn'),
            ]);

            $userProfile->whereUserId($userProfile->user_id)->update([
                'telepon' => $request->post('telepon'),
                'jenis_kelamin' => $request->post('jenis_kelamin'),
                'umur' => $request->post('umur'),
                'alamat' => $request->post('alamat'),
            ]);

            return redirect(route('master-data.siswa.index'))
                ->with('message', 'Data siswa ' . $request->post('nisn') . ' berhasil diperbarui!');
        } catch (\Throwable $th) {
            return redirect(route('master-data.siswa.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    public function destroy(string $id)
    {
        try {
            $siswa = Siswa::findOrFail($id);
            if (!$siswa) {
                return redirect(route('master-data.siswa.index'))
                    ->with('error', 'Operasi gagal. Data siswa tidak ditemukan!');
            }
            $siswa->delete();
            $user = User::whereEmail($siswa->nisn)->first();
            Profile::whereUserId($user->id)->delete();
            User::whereEmail($siswa->nisn)->delete();
            return redirect(route('master-data.siswa.index'))
                ->with('message', 'Data dan profile siswa ' . $siswa->siswa . ' berhasil dihapus!');
        } catch (\Throwable $th) {
            return redirect(route('master-data.siswa.index'))
                ->with('error', 'Ada Error Delete Cuyyy!');
        }
    }
}
