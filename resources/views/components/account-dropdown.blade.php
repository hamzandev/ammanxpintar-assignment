{{-- user account dropdown --}}
<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex flex-row-reverse lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
        <span class="avatar avatar-sm" style="background-image: url({{ Session::get('user')[0]->avatar }})"></span>
        <div class="d-none d-xl-block pe-2 text-end">
            <div>{{ Session::get('user')[0]->name ?? 'Hamzan Wahyudi' }}</div>
            <div class="mt-1 small text-secondary">{{  Session::get('user')[0]->email ?? 'hamzan@gmail.com' }}</div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="{{ route('user.dashboard') }}" class="dropdown-item">Dashboard</a>
        <a href="#" class="dropdown-item">Profile</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Settings</a>
        <a href="{{ route('auth.logout') }}" class="dropdown-item">Logout</a>
    </div>
</div>
