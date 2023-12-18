<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $mapel = MataPelajaran::getAll();
            return view('backend.mapel.index', compact('mapel'));
        } catch (\Throwable $th) {
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|min:3|unique:mata_pelajarans',
            ]);
            MataPelajaran::create($request->except('_token'));
            return redirect(route('master-data.mapel.index'))
                ->with('message', 'Mapel baru : ' . $request->post('nama') . ', berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return redirect(route('master-data.mapel.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        return view('backend.mapel.show', compact('mapel'));
    }


    public function update(Request $request, string $id)
    {

        $request->validate([
            'nama' => 'required|min:2'
        ]);
        try {
            $cek = MataPelajaran::findOrFail($id);
            if (!$cek) {
                return redirect(route('master-data.mapel.index'))->with('error', 'Data mapel tidak ditemukan!');
            }

            if ($cek->nama != $request->post('nama')) {
                $cekDuplikat = MataPelajaran::whereNama($request->post('nama'))->first();
                if ($cekDuplikat) {
                    return redirect(route('master-data.mapel.index'))
                        ->with('error', 'Operasi gagal dilakukan. Mata pelajaran tersebut telah ada di sistem!');
                }
            }
            $cek->update($request->except(['_token', '_method']));
            return redirect(route('master-data.mapel.index'))
                ->with('message', 'Data mapel ' . $request->post('nama') . ' berhasil diperbarui!');
        } catch (\Throwable $th) {
            return redirect(route('master-data.mapel.index'))
                ->with('error', 'Telah terjadi kesalahan. Silahkan coba lagi nanti!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        if (!$mapel) {
            return redirect(route('master-data.mapel.index'))
                ->with('error', 'Operasi gagal. Data mata pelajaran tidak ditemukan!');
        }
        $mapel->delete();
        return redirect(route('master-data.mapel.index'))
            ->with('message', 'Data mata pelajaran ' . $mapel->nama . ' berhasil dihapus!');
    }
}
