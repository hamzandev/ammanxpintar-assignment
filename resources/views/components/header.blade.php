{{-- <header class="navbar navbar-expand-md d-print-none"> --}}
<header class="navbar navbar-expand-md sticky-top d-print-none" data-bs-theme="dark">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-broadcast-tower"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M16.616 13.924a5 5 0 1 0 -9.23 0" />
                <path d="M20.307 15.469a9 9 0 1 0 -16.615 0" />
                <path d="M9 21l3 -9l3 9" />
                <path d="M10 19h4" />
            </svg>
            <span>Castify</span>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            @auth
                <div class="d-none d-md-flex">
                    <x-theme-toggler></x-theme-toggler>
                    <x-notification></x-notification>
                </div>
                <x-account-dropdown></x-account-dropdown>
            @else
                <span class="d-flex align-items-center">
                    <a href="{{ route('auth.login') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login-2" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                            <path d="M3 12h13l-3 -3" />
                            <path d="M13 15l3 -3" />
                        </svg>
                        <span class="me-2">
                            Sign In
                        </span>
                    </a>
                </span>
            @endauth
        </div>
    </div>
</header>
