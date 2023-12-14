<x-app-layout title="Homepage">

    <div class="row" style="height: 80vh">
        <div class="col-md-8 justify-content-center d-flex text-md-start text-center"
            style="min-height: 80vh; flex-direction: column;">
            <h1 class="display-md-4 display-5" style="font-weight: 800;">Hallo, Selamat Datang kembali di Castify💻
            </h1>
            <p style="font-size: 1.2rem;">Platform Ujian Online yang gratis, cepat, dan mudah digunakan untuk keperluan
                ujian berbasis online kamu!</p>
            <a href="@auth {{ route('user.dashboard') }} @else {{ route('auth.login') }} @endauth"
                class="btn btn-lg btn-primary px-5 py-3 mx-md-0 mx-auto" style="max-width: max-content;">
                <span class="me-2">
                    @auth
                        Dashboard
                    @else
                        Mulai Sekarang
                    @endauth
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevrons-right"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 7l5 5l-5 5" />
                    <path d="M13 7l5 5l-5 5" />
                </svg>
            </a>
        </div>
        <div class="col-md-4 d-flex align-items-center pe-4" style="min-height: 80vh;">
            <img src="{{ asset('assets/img/laptop.png') }}" style="background-blend-mode: multiply; scale: 1.15"
                alt="laptop">
        </div>
    </div>

    <div class="row my-5 pt-5">
        <h2 class="text-center">Benefits</h2>
        <p class="text-center mx-auto px-5 mb-5" style="width: 70%;">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Incidunt itaque consectetur impedit, minus autem et voluptatem doloremque cupiditate
            temporibus, amet similique soluta nemo aliquid ipsam? Nisi, incidunt maiores. Ut, recusandae!</p>
        @php
            $color = ['red', 'blue', 'yellow', 'green'];
        @endphp
        @for ($i = 0; $i < 4; $i++)
            <div class="col-md-4 mb-3">
                <div class="card bg-{{ $color[$i] }} text-{{ $color[$i] }}-fg">
                    <div class="card-stamp">
                        <div class="card-stamp-icon bg-white text-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Card with background and icon</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa
                            ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="row my-5 pt-5">
        <h2 class="text-center">Testimonies</h2>
        <p class="text-center mx-auto px-5 mb-5" style="width: 70%;">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Incidunt itaque consectetur impedit, minus autem et voluptatem doloremque cupiditate
            temporibus, amet similique soluta nemo aliquid ipsam? Nisi, incidunt maiores. Ut, recusandae!</p>
        @php
            $color = ['red', 'blue', 'yellow', 'green'];
        @endphp
        @for ($i = 0; $i < 4; $i++)
            <div class="col-md-4 mb-3">
                <a class="card card-link" href="#">
                    <div class="card-cover card-cover-blurred text-center"
                        style="background-image: url(./static/photos/blond-using-her-laptop-at-her-bedroom.jpg)">
                        <span class="avatar avatar-xl avatar-thumb rounded"
                            style="background-image: url(./static/avatars/012f.jpg)"></span>
                    </div>
                    <div class="card-body text-center">
                        <div class="card-title mb-1">Marsha Labat</div>
                        <div class="text-secondary">Research Associate</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima optio eos totam excepturi
                            odio numquam nemo voluptatum ipsum veniam nesciunt?</p>
                    </div>
                </a>
            </div>
        @endfor
    </div>

</x-app-layout>
