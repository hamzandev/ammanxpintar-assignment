<x-app-layout title="Register">
    <div class="row">
        <form method="POST" action="{{ route('auth.signup') }}" class="col-md-6 mx-auto text-center">
            @csrf
            <fieldset class="form-fieldset p-5">
                <h1>Welcome to Castify!</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis doloribus
                    dolorum quisquam!</p>
                <div class="row text-start">
                    <div class="col-md-6">
                        <label for="name" class="form-label required">Fullname</label>
                        <div class="input-icon mb-3 mt-1">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </span>
                            <input type="name" name="name" id="name" value="{{ old('name') }}"
                                class="form-control" placeholder="John Doe">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label required">Email Address</label>
                        <div class="input-icon mb-3 mt-1">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
                                </svg>
                            </span>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="form-control" placeholder="john@doe.mail">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label required">Password</label>
                        <div class="input-icon mb-3 mt-1">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" /><path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" /></svg>
                            </span>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label required">Confirm Password</label>
                        <div class="input-icon mb-3 mt-1">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" />
                                    <path d="M15 9h.01" />
                                </svg>
                            </span>
                            <input type="password" name="conform-password" id="conform-password" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <p class="text-warning text-start">* Password must contain letters (Capital and Lower), number, symbols, and must at least 8 character.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
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
                    Saya sudah punya akun. Login
                </span>
                <a href="{{ route('auth.login') }}" class="block text-center">disini.</a>
            </div>
        </form>

    </div>
</x-app-layout>
