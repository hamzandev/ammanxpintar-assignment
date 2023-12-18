<x-setting-layout>
    <div class="card-body">
        <h2 class="mb-4">My Account</h2>
        <div class="row align-items-center">
            <div class="col-auto"><span class="avatar avatar-xl"
                    style="background-image: url({{ Auth::user()->avatar ?? asset('assets/img/avatar.jpg') }})"></span>
            </div>
        </div>
        @if (auth()->user()->role == 'siswa')
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <div class="form-label">Nama Lengkap</div>
                    <input type="text" class="form-control" value="{{ $userProfile->nama_lengkap }}">
                </div>
                <div class="col-md-6">
                    <div class="form-label">NISN</div>
                    <input type="text" class="form-control" value="{{ $userProfile->nisn }}">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Kelas</div>
                    <input type="text" class="form-control"
                        value="{{ $userProfile->kelas }} ({{ $userProfile->keterangan }})">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Jenis Kelamin</div>
                    <input type="text" class="form-control"
                        value="{{ $userProfile->jenis_kelamin }} ({{ $userProfile->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }})">
                </div>
                <div class="col">
                    <div class="form-label">Alamat</div>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{ $userProfile->alamat }}</textarea>
                </div>
                <h3 class="card-title mt-4">Password</h3>
                <p class="card-subtitle text-info">Ketika Akun kamu pertama kali dibuat, password default akunmu adalah
                    NISN mu. Pasikan untuk mengganti Password setelah kamu login dan biarkan ini kosong jika tidak ingin
                    merubah Password.</p>
                <div>
                    <div class="row g-2">
                        <div class="col-auto">
                            <input type="text" class="form-control w-auto">
                        </div>
                        <div class="col-auto"><a href="#" class="btn">
                                Change
                            </a></div>
                    </div>
                </div>
                <h3 class="card-title mt-4">Password</h3>
                <p class="card-subtitle">You can set a permanent password if you don't want to use temporary login
                    codes.</p>
                <div>
                    <a href="#" class="btn">
                        Set new password
                    </a>
                </div>
                <h3 class="card-title mt-4">Public profile</h3>
                <p class="card-subtitle">Making your profile public means that anyone on the Dashkit network will be
                    able to find
                    you.</p>
                <div>
                    <label class="form-check form-switch form-switch-lg">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label form-check-label-on">You're currently visible</span>
                        <span class="form-check-label form-check-label-off">You're
                            currently invisible</span>
                    </label>
                </div>
            </div>
        @else
            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <div class="form-label">Nama</div>
                    <input type="text" class="form-control" value="{{ $userProfile->name }}">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Telepon</div>
                    <input type="text" class="form-control" value="{{ $userProfile->telepon }}">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Umur</div>
                    <input type="text" class="form-control" value="{{ $userProfile->umur }}">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Jenis Kelamin</div>
                    <input type="text" class="form-control"
                        value="{{ $userProfile->jenis_kelamin }} ({{ $userProfile->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }})">
                </div>
                <div class="col">
                    <div class="form-label">Alamat</div>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{ $userProfile->alamat }}</textarea>
                </div>
                <h3 class="card-title mt-4">Password</h3>
                <p class="card-subtitle text-info">Ketika Akun kamu pertama kali dibuat, password default akunmu adalah
                    NISN mu. Pasikan untuk mengganti Password setelah kamu login dan biarkan ini kosong jika tidak ingin
                    merubah Password.</p>
                <div>
                <div class="row g-2 mb-5">
                    <div class="col-auto">
                        <input type="text" class="form-control w-auto">
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn">
                            Change
                        </a>
                    </div>
                </div>
            </div>
    </div>
    @endif
    <div class="card-footer bg-transparent mt-auto">
        <div class="btn-list justify-content-end">
            <a href="#" class="btn">
                Cancel
            </a>
            <a href="#" class="btn btn-primary">
                Submit
            </a>
        </div>
    </div>
</x-setting-layout>
