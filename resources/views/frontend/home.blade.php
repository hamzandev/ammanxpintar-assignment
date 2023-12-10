<x-app-layout title="Homepage">

    <div class="row" style="height: 80vh">
        <div class="col-md-8 justify-content-center d-flex text-md-start text-center" style="min-height: 80vh; flex-direction: column;">
            <h1 class="display-md-4 display-5" style="font-weight: 800;">Find and Upgrade your Skills with Castify💻
            </h1>
            <p style="font-size: 1.2rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
                dolorem sunt voluptatem.</p>
            <a href="{{ route('courses.list') }}" class="btn btn-lg btn-primary px-5 py-3 mx-md-0 mx-auto" style="max-width: max-content;">
                <span class="me-2">
                    Browse Course
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
            <img src="{{ asset('assets/img/laptop.png') }}" style="background-blend-mode: multiply; scale: 1.15" alt="laptop">
        </div>
    </div>

    <div class="row">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h2>Most Popular Courses</h2>
            <a href="#" class="btn btn-link">See all Courses</a>
        </div>
        @for ($i = 0; $i < 8; $i++)
            <div class="col-md-3 mb-4">
                <div class="card shadow">
                    <!-- Photo -->
                    <div class="img-responsive img-responsive-21x9 card-img-top"
                        style="background-image: url(https://ionic.io/blog/wp-content/uploads/2022/04/stenciltailwind-feature-image-1536x845.png)">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
                        <h3>
                            <small class="text-decoration-line-through">
                                123.129, 00 IDR
                            </small>
                            <sup class="text-red">23%</sup>
                            <span class="text-green d-block">
                                78.129, 00 IDR
                            </span>
                        </h3>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thumb-up"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                                </svg>
                                <span>178</span>
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                                <span>125</span>
                            </span>
                            <span class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-message-circle" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 20l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c3.255 2.777 3.695 7.266 1.029 10.501c-2.666 3.235 -7.615 4.215 -11.574 2.293l-4.7 1" />
                                </svg>
                                <span>67</span>
                            </span>
                        </div>

                        <div class="d-flex laign-items-center gap-2 justify-content-end">
                            <button style="width: 50%" class="btn btn-outline-primary rounded-pill">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                    <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                </svg>
                                Cart
                            </button>
                            <a style="width: 50%" href="{{ route('courses.show', $i+1) }}" class="btn btn-primary rounded-pill">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-list"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path
                                        d="M4 14m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                </svg>
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
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
