<x-app-layout title="Mata Pelajaran">
    <div class="row">
        <div class="col-md-7">
            @if (Session::has('message'))
                <x-alert message="{{ Session::get('message') }}" type="success" />
            @elseif(Session::has('error'))
                <x-alert message="{{ Session::get('error') }}" type="error" />
            @endif
            <div class="d-flex justify-content-between align-items-start">
                <h1>List Mata Pelajaran</h1>
                <a href="{{ route('user.mapel.create') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M9 12h6" />
                        <path d="M12 9v6" />
                    </svg>
                    Mapel Baru
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Mapel</th>
                                <th>Keterangan</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mapel as $key => $m)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="text-secondary">
                                        {{ $m->nama }}
                                    </td>
                                    <td class="text-secondary">
                                        {{ $m->keterangan }}
                                    </td>
                                    <td>
                                        <x-actions-button editRoute="{{ route('user.mapel.show', $m->id) }}"
                                            deleteRoute="{{ route('user.mapel.destroy', $m->id) }}" />
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
