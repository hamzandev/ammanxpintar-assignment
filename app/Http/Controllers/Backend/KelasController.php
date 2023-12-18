<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::paginate(10);
        return view('backend.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required|unique:kelas'
        ]);

        try {
            Kelas::create($request->except(['_token']));
            return redirect(route('master-data.kelas.index'))
                ->with('message', 'Kelas baru : ' . $request->kelas . ', berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return redirect(route('master-data.kelas.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }


    public function show(string $id)
    {
        try {
            $kelas = Kelas::findOrFail($id);
            if (!$kelas) {
                return redirect(route('master-data.kelas.index'))->with('error', 'Data kelas tidak ditemukan!');
            }
            return view('backend.kelas.edit', compact('kelas'));
        } catch (\Throwable $th) {
            return redirect(route('master-data.siswa.index'))->with('error', "Telah terjadi kesalahan. Silahkan coba lagi nanti!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return dd($request->all());
        $accpetedKelas = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
        $request->validate([
            'kelas' => ['required', Rule::in($accpetedKelas)]
        ]);

        try {
            $cek = Kelas::findOrFail($id);
            if (!$cek) {
                return redirect(route('master-data.kelas.index'))->with('error', 'Data kelas tidak ditemukan!');
            }

            if ($cek->kelas != $request->post('kelas')) {
                $cekDuplikat = Kelas::whereKelas($request->post('kelas'))->first();
                if ($cekDuplikat) {
                    return redirect(route('master-data.kelas.index'))
                        ->with('error', 'Operasi gagal dilakukan. Kelas tersebut telah ada di sistem!');
                }
            }
            $cek->update($request->except(['_token', '_method']));
            return redirect(route('master-data.kelas.index'))
                ->with('message', 'Data kelas ' . $request->post('kelas') . ' berhasil diperbarui!');
        } catch (\Throwable $th) {
            return redirect(route('master-data.kelas.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        if (!$kelas) {
            return redirect(route('master-data.kelas.index'))
                ->with('error', 'Operasi gagal. Data kelas tidak ditemukan!');
        }
        $kelas->delete();
        return redirect(route('master-data.kelas.index'))
            ->with('message', 'Data kelas ' . $kelas->kelas . ' berhasil dihapus!');
    }
}
