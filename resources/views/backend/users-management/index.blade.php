<x-setting-layout>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline">
            <h2 class="mb-4">User Management</h2>
            <a href="{{ route('master-data.users.create') }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                    <path d="M9 12h6" />
                    <path d="M12 9v6" />
                </svg>
                User Baru
            </a>
        </div>
        <div class="row">
            <div class="col">
                <table id="datatable" class="table table-vcenter card-table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $colors = [
                                'admin' => 'red',
                                'siswa' => 'blue',
                                'petugas' => 'yellow',
                            ];
                        @endphp
                        @foreach ($users as $key => $s)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-secondary">
                                    {{ $s->name }}
                                </td>
                                <td class="text-secondary">
                                    <a class="text-secondary" href="{{ route('master-data.siswa.show', $s->id) }}">
                                        {{ $s->email }}
                                    </a>
                                </td>
                                <td class="text-secondary">
                                    <div class="badge text-white bg-{{ $colors[$s->role] }}">
                                        {{ $s->role }}
                                    </div>
                                </td>
                                <td>
                                    <x-actions-button editRoute="{{ route('master-data.siswa.show', $s->id) }}"
                                        deleteRoute="{{ route('master-data.siswa.destroy', $s->id) }}" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-setting-layout>
