<x-app-layout title="Data Siswa">
    <div class="row">
        <div class="col">
            @if(Session::has('message'))
            <div class="mb-3">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <div class="d-flex">
                      <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                      </div>
                      <div>
                        {{ Session::get('message') }}
                      </div>
                    </div>
                    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                  </div>
            </div>
            @endif
            <div class="d-flex justify-content-between align-items-start">
                <h1>Data Siswa</h1>
                <a href="{{ route('user.mapel.create') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M9 12h6" /><path d="M12 9v6" /></svg>
                    Siswa Baru
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Maryjo Lebarree</td>
                                <td class="text-secondary">
                                    Civil Engineer, Product Management
                                </td>
                                <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a>
                                </td>
                                <td class="text-secondary">
                                    User
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Egan Poetz</td>
                                <td class="text-secondary">
                                    Research Nurse, Engineering
                                </td>
                                <td class="text-secondary"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                                <td class="text-secondary">
                                    Admin
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kellie Skingley</td>
                                <td class="text-secondary">
                                    Teacher, Services
                                </td>
                                <td class="text-secondary"><a href="#"
                                        class="text-reset">kskingley7@columbia.edu</a></td>
                                <td class="text-secondary">
                                    User
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Christabel Charlwood</td>
                                <td class="text-secondary">
                                    Tax Accountant, Engineering
                                </td>
                                <td class="text-secondary"><a href="#"
                                        class="text-reset">ccharlwood8@nifty.com</a></td>
                                <td class="text-secondary">
                                    Owner
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Haskel Shelper</td>
                                <td class="text-secondary">
                                    Staff Scientist, Legal
                                </td>
                                <td class="text-secondary"><a href="#"
                                        class="text-reset">hshelper9@woothemes.com</a></td>
                                <td class="text-secondary">
                                    Admin
                                </td>
                                <td>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
