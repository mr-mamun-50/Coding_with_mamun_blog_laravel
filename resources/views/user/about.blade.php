@extends('layouts.app')

@section('title')
    About |
@endsection

@section('mainSection')
    <div class="text-center header">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-9">
                    <h1 class="mb-4">About Me</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-default" href="">Home
                                &nbsp; &nbsp; /</a></li>
                        <li class="list-inline-item text-primary">About Me</li>
                    </ul>
                </div>
            </div>
        </div>

        <svg class="header-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="header-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>


        <svg class="header-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="header-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
                stroke-width="2" />
        </svg>
    </div>

    <section class="section-sm">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="mb-4 col-lg-5 col-md-6 mb-md-0">
                    <div class="image-wrapper">
                        <img class="img-fluid w-100" src="{{ asset('usr_assets/images/author.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="pl-0 content pl-lg-3">
                        <h2 id="helllo-im-richi-andorn-im-a-biography-based-researcher-and-author">Helllo I’m Mamunur Rashid
                            Mamun I’m a Biography Based researcher And Author</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa vitae felis augue. In
                            venenatis scelerisque accumsan egestas mattis. Massa feugiat in sem pellentesque.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="mb-5 text-center col-12">
                    <h2>Educational Qualification <br> That I Have Gathered</h2>
                </div>

                <div class="mb-4 text-center col-lg-3 col-sm-6">
                    <h3 class="pb-3 mx-2 mb-3 border-bottom">BEng Electronic Engineering</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

                <div class="mb-4 text-center col-lg-3 col-sm-6">
                    <h3 class="pb-3 mx-2 mb-3 border-bottom">MSc in Research Methodology</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

                <div class="mb-4 text-center col-lg-3 col-sm-6">
                    <h3 class="pb-3 mx-2 mb-3 border-bottom">BEng Electronic Engineering</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

                <div class="mb-4 text-center col-lg-3 col-sm-6">
                    <h3 class="pb-3 mx-2 mb-3 border-bottom">MSc in Research Methodology</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

            </div>
        </div>
    </section>

    <section class="section wave">
        <img src="{{ asset('usr_assets/images/backgrounds/wave-bg.svg') }}" class="wave-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="mb-4 col-lg-5 col-md-6 mb-md-0">
                    <h2 class="mb-4">What is the main mission of mine and what i wanna do?</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                        et ea rebum.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('usr_assets/images/mission.png') }}" class="img-fluid">
                </div>
            </div>
        </div>


        <svg class="wave-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
                stroke="#040306" stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="wave-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>


        <svg class="wave-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
                stroke="#040306" stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="wave-shape-4" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>
    </section>



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="bg-transparent border-0 modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="text-center col-12">
                    <h2 class="mb-5">Books That Written By Me</h2>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="overflow-hidden text-center border-0 shadow-none card rounded-0">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="{{ asset('usr_assets/images/books/01.jpg') }}" alt=""
                                    class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="mb-3 text-uppercase">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="overflow-hidden text-center border-0 shadow-none card rounded-0">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="{{ asset('usr_assets/images/books/02.jpg') }}" alt=""
                                    class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="mb-3 text-uppercase">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="overflow-hidden text-center border-0 shadow-none card rounded-0">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="{{ asset('usr_assets/images/books/03.jpg') }}" alt=""
                                    class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="mb-3 text-uppercase">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="overflow-hidden text-center border-0 shadow-none card rounded-0">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="{{ asset('usr_assets/images/books/04.jpg') }}" alt=""
                                    class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="mb-3 text-uppercase">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="mx-auto text-center col-lg-10">
                    <h2 class="mb-5">My Contents also published <br> on these websites</h2>
                    <ul class="list-inline logo-list">

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-1.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-2.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-3.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-4.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-5.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-6.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-7.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-8.png') }}"></li>

                        <li class="list-inline-item"><img class="img-fluid"
                                src="{{ asset('usr_assets/images/logos/logo-9.png') }}"></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
