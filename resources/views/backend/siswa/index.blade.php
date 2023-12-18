<x-app-layout title="Data Siswa">
    <div class="row">
        <div class="col-md-8">
            @if (Session::has('message'))
                <x-alert message="{{ Session::get('message') }}" type="success" />
            @elseif(Session::has('error'))
                <x-alert message="{{ Session::get('error') }}" type="error" />
            @endif
            <div class="d-flex justify-content-between align-items-start">
                <h1>Data Siswa</h1>
                <a href="{{ route('master-data.siswa.create') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M9 12h6" />
                        <path d="M12 9v6" />
                    </svg>
                    Siswa Baru
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $key => $s)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class="text-secondary">
                                        {{ $s->nisn }}
                                    </td>
                                    <td class="text-secondary">
                                        <a class="text-secondary" href="{{ route('master-data.siswa.show', $s->id) }}">
                                            {{ $s->nama_lengkap }}
                                        </a>
                                    </td>
                                    <td class="text-secondary">
                                        {{ $s->kelas }} ({{ $s->keterangan }})
                                    </td>
                                    <td>
                                        <x-actions-button
                                            editRoute="{{ route('master-data.siswa.show', $s->id) }}"
                                            deleteRoute="{{ route('master-data.siswa.destroy', $s->id) }}"
                                        />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
