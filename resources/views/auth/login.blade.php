<x-app-layout title="Home">
    <div class="row">
        <div class="col-md-5 mx-auto text-center">
            <fieldset class="form-fieldset p-5">
                <div class="p-4">
                    <img style="background-blend-mode: multiply; object-fit: cover;"
                        src="{{ asset('assets/img/welcome.svg') }}" alt="welcome ilustrator">
                </div>
                <h1>Welcome to Castify!</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis doloribus
                    dolorum quisquam!</p>
                {{-- <div class="mb-3">
                        <label class="form-label">Validation States </label>
                        <input type="text" class="form-control is-valid mb-2" placeholder="Valid State..">
                        <input type="text" class="form-control is-invalid" placeholder="Invalid State..">
                        <div class="invalid-feedback">Invalid feedback</div>
                    </div> --}}
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
        </div>

    </div>
</x-app-layout>
