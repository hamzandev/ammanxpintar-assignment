<x-app-layout title="{{ Auth::user()->name }}">
    <div class="card">
        <div class="row g-0">
            <div class="col-12 col-md-3 border-end">
                <div class="card-body">
                    <h4 class="subheader">Basic Setting</h4>
                    <div class="list-group list-group-transparent">
                        <a href="{{ route('setting.profile') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center {{ Str::contains(Request::path(), 'profile') ? 'active text-primary' : '' }}">My
                            Account</a>
                    </div>
                    @if (auth()->user()->role == 'admin')
                        <h4 class="subheader mt-5">Manage Users</h4>
                        <div class="list-group list-group-transparent">
                            <a href="{{ route('master-data.users.index') }}"
                                class="list-group-item list-group-item-action d-flex align-items-center {{ Str::contains(Request::path(), 'users') ? 'active text-primary' : '' }}">
                                User Management
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-9 d-flex flex-column">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>
