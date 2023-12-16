<x-app-layout title="Tambah Siswa">
    <h2>Tambah Siswa</h2>
    <form method="POST" action="{{ route('user.siswa.store') }}" class="row">
        @csrf
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('user.siswa.index') }}" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                        Cancel
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nomor Induk Siswa (NISN)</label>
                                <input value="{{ old('nisn') }}" type="number"
                                    class="form-control {{ $errors->has('nisn') ? 'is-invalid' : '' }}" name="nisn"
                                    placeholder="ex: 1298391823912">
                                @if ($errors->has('nisn'))
                                    <span class="invalid-feedback">{{ $errors->first('nisn') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input value="{{ old('nama') }}" type="text"
                                    class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama"
                                    placeholder="ex: John Doe">
                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="kelas_id">Kelas</label>
                                <select name="kelas_id"
                                    class="form-select {{ $errors->has('kelas_id') ? 'is-invalid' : '' }}">
                                    <option value="select">-- Select One --</option>
                                    @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->kelas }} ({{ $k->keterangan }})
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('kelas_id'))
                                    <span class="invalid-feedback">{{ $errors->first('kelas_id') }}</span>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tahun Ajaran</label>
                                <input type="number" class="form-control" name="tahun-ajaran" placeholder="ex: 2018">
                            </div>
                        </div> --}}
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                            </svg>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
