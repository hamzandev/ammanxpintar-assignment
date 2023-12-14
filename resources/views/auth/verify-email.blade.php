<x-app-layout title="Verify Email">
    <div class="d-flex justify-content-center align-items-center" style="min-height:90vh;">
        <div class="col-md-5 mx-auto">
            <img src="{{ asset('assets/img/mail.png') }}"
                alt="mail image">
                <h1 class="text-center" style="font-weight: 1.6rem">You are in one step again!</h1>
            <p class="text-lg text-center">{{ Session::get('message') }}</p>
        </div>
    </div>
</x-app-layout>
