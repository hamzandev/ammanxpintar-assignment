<x-app-layout title="Detail Siswa - {{ $siswa->nama_lengkap }} | Castify">

    <h2 class="text-center text-md-start">Detail Siswa <div class="badge bg-green text-white">{{ $siswa->nisn }}</div></h2>
    <span>{{ $siswa->nisn }}</span>
    <form action="{{ route('master-data.siswa.update', $siswa->nisn) }}" method="POST" class="row">
        @csrf
        @method('PUT')
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('master-data.siswa.index') }}" class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                        Kembali
                    </a>
                    <div class="row align-items-center mb-4">
                        <div class="col">
                            <div class="rounded-pill mx-md-0 mx-auto m-4 overflow-hidden"
                                style="aspect-ratio: 1/1; width: 30%">
                                <img style="width: 100%; height: 100%; object-fit: cover;"
                                    src="{{ asset('assets/img/avatar.jpg') }}" alt="siswa-avatar">
                            </div>
                            <div class="my-3">
                                <label for="avatar" class="form-label">Ubah Foto</label>
                                <input type="file" name="avatar" id="avatar" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_lengkap" class="form-label required">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap"
                                class="form-control {{ $errors->has('nama_lengkap') ? 'is-invalid' : '' }}"
                                value="{{ $siswa->nama_lengkap }}">
                        </div>
                        <div class="col-md-6">
                            <label for="nisn" class="form-label required">NISN</label>
                            <input type="text" name="nisn"
                                class="form-control {{ $errors->has('nisn') ? 'is-invalid' : '' }}"
                                value="{{ $siswa->nisn }}">
                        </div>
                        <div class="col-md-6">
                            <label for="kelas_id" class="form-label required">Kelas</label>
                            <select name="kelas_id" id="kelas_id"
                                class="form-control {{ $errors->has('kelas_id') ? 'is-invalid' : '' }}">
                                @foreach ($kelas as $k)
                                    <option {{ $k->id == $siswa->kelas_id ? 'selected' : '' }}
                                        value="{{ $k->id }}">
                                        {{ $k->kelas }} ({{ $k->keterangan }})
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('kelas_id'))
                                <span class="invalid-feedback">{{ $errors->first('kelas_id') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" class="form-control {{ $errors->has('umur') ? 'is-invalid' : '' }}"
                                name="umur" value="{{ $siswa->umur }}">
                            @if ($errors->has('umur'))
                                <span class="invalid-feedback">{{ $errors->first('umur') }}</span>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text"
                                class="form-control {{ $errors->has('telepon') ? 'is-invalid' : '' }}" name="telepon"
                                value="{{ $siswa->telepon }}">
                            @if ($errors->has('telepon'))
                                <span class="invalid-feedback">{{ $errors->first('telepon') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">
                                <option value="0">-- Select One --</option>
                                @foreach ($jk as $k)
                                    <option {{ $k == $siswa->jenis_kelamin  ? 'selected' : '' }} value="{{ $k }}">
                                        {{ $k }} ({{ $k == 'P' ? 'Perempuan' : 'Laki-laki' }})
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('jenis_kelamin'))
                                <span class="invalid-feedback">{{ $errors->first('jenis_kelamin') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-label">Alamat</div>
                            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5">{{ $siswa->alamat }}</textarea>
                        </div>
                        <h3 class="card-title mt-4">Password Siswa</h3>
                        <p class="card-subtitle">Ketika data siswa pertama kali dibuat, password bawaan telah di-set
                            menjadi : <b class="text-red">12345678</b>
                            <br>
                            Silahkan ganti password siswa apabila diperlukan.
                        </p>
                        <div class="col-md-6">
                            <label for="new_password" class="form-label">Ganti Password Siswa</label>
                            <input type="text" class="form-control {{ $errors->has('new_password') ? 'is-invalid' : '' }}" id="new_password" name="new_password">
                            @if ($errors->has('new_password'))
                                <span class="invalid-feedback">{{ $errors->first('new_password') }}</span>
                            @endif
                        </div>


                    </div>
                    <div class="d-flex justify-content-end mt-5 gap-3">
                        <button class="btn btn-red">
                            Delete Siswa
                        </button>
                        <button type="submit" class="btn btn-success">

                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
