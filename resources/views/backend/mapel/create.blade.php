<x-app-layout title="Tambah Mata Pelajaran">
    <h2>Tambah Mata Pelajaran</h2>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('user.mapel.index') }}" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                        Cancel
                    </a>
                </div>
                <form action="{{ route('user.mapel.store') }}" method="POST" class="card-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Mata Pelajaran</label>
                        <input type="text" class="form-control" name="mapel" placeholder="ex: Matematika">
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
