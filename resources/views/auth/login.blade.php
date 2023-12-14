<x-app-layout title="Home">
    <div class="row">
        <form class="col-md-5 mx-auto text-center">
            <fieldset class="form-fieldset p-5">
                <div class="">
                    <img style="background-blend-mode: multiply; object-fit: cover; width: 50%;"
                        src="{{ asset('assets/img/welcome.svg') }}" alt="welcome ilustrator">
                </div>
                <h1>Welcome to Castify!</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis doloribus
                    dolorum quisquam!</p>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
                        </svg>
                    </span>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Email Address">
                </div>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" />
                            <path d="M15 9h.01" />
                        </svg>
                    </span>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>

                <div class="mb-3">
                    <p class="text-center">Atau </p>
                </div>

                <a href="{{ route('auth.signin', 'google') }}" type="submit" class="btn btn-danger w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 2a9.96 9.96 0 0 1 6.29 2.226a1 1 0 0 1 .04 1.52l-1.51 1.362a1 1 0 0 1 -1.265 .06a6 6 0 1 0 2.103 6.836l.001 -.004h-3.66a1 1 0 0 1 -.992 -.883l-.007 -.117v-2a1 1 0 0 1 1 -1h6.945a1 1 0 0 1 .994 .89c.04 .367 .061 .737 .061 1.11c0 5.523 -4.477 10 -10 10s-10 -4.477 -10 -10s4.477 -10 10 -10z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    Continue with Google
                </a>

            </fieldset>
            <div class="mt-3 text-secondary">
                <span>
                    Saya belum punya akun. Buat akun
                </span>
                <a href="{{ route('auth.register') }}" class="block text-center">disini.</a>
            </div>
        </form>

    </div>
</x-app-layout>
