<x-app-layout title="Home">
    <div class="row">
        <form method="POST" action="{{ route('siswa.login') }}" class="col-md-5 mx-auto text-center">
            @csrf
            @if (Session::has('error'))
                <x-alert type="error" message="{{ Session::get('error') }}" />
            @endif
            <fieldset class="form-fieldset p-5 mt-5 shadow-lg" style="border-radius: 12px;">
                <div class="m-md-3">
                    <h1>Selamat Datang, Siswa!</h1>
                    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis doloribus
                        dolorum quisquam!</p>
                    <div class="mb-3 text-start">
                        <label class="form-label required" for="nisn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            NISN
                        </label>
                        <input type="text" name="email" value="{{ old('email') }}"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email"
                            placeholder="NISN Siswa terdiri atas 10 digit">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label required" for="password">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                            Password
                        </label>
                        <input type="password" name="password"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
</x-app-layout>
