<x-app-layout title="Data Kelas">
    <div class="row">
        <div class="col-md-8">
            @if (Session::has('message'))
                <x-alert message="{{ Session::get('message') }}" type="success" />
            @elseif(Session::has('error'))
                <x-alert message="{{ Session::get('error') }}" type="error" />
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h1>Data Kelas</h1>
                        <a href="{{ route('user.kelas.create') }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M9 12h6" />
                                <path d="M12 9v6" />
                            </svg>
                            Kelas Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table card-table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kelas</th>
                                <th>Keterangan</th>
                                <th class="w-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($kelas) <= 0)
                                <tr>
                                    <td colspan="4">
                                        <h3 class="text-center my-3">No data found!</h3>
                                    </td>
                                </tr>
                            @else
                                @foreach ($kelas as $key => $k)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td class="text-secondary">
                                            {{ $k->kelas }}
                                        </td>
                                        <td class="text-secondary">
                                            {{ $k->keterangan }}
                                        </td>
                                        <td>
                                            <x-actions-button editRoute="{{ route('user.kelas.show', $k->id) }}"
                                                deleteRoute="{{ route('user.kelas.destroy', $k->id) }}" />
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
