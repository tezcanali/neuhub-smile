@props(['page'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.start') }}
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/favicon-16x16.png')}}" />
    <link rel="shortcut icon" href="{{asset('front/favicon.ico')}}" />
    <link rel="mask-icon" href="{{asset('front/safari-pinned-tab.svg')}}" color="#FFF" />
    <meta name="msapplication-TileColor" content="#FFF" />
    <meta name="theme-color" content="#FFF" />

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta() as $tag)
        {{ $tag }}
    @endforeach

    {!! seo()->for($page) !!}

    <link rel="stylesheet" href="{{ asset('front/css/fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}" />

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getStyles() as $name => $path)
        @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <link rel="stylesheet" href="{{ $path }}" />
        @endif
    @endforeach

    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.end') }}
</head>
<body>
{{ \Filament\Facades\Filament::renderHook('filament-fabricator.body.start') }}

@include('front.layout.header')

<!-- hero-page -->
<div class="hero-page w-100 h-250px overflow-hidden position-relative">
    <div class="container-xxl position-relative z-3 h-100 py-4 d-flex justify-content-center flex-column">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-text-primary dark mb-lg-3 mb-2">
                <li class="breadcrumb-item"><a href="#">Smile Center Turkey</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center gap-3">
            <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="#192D74" />
            </svg>
            <div class="fs-54 fw-bold">About Us</div>
        </div>
    </div>
    <div class="overlay position-absolute start-0 top-0 w-100 h-100 bg-primary bg-opacity-25 z-1"></div>
    <img src="{{asset('front/img/blog.jpg')}}" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" style="filter: grayscale(1)" />
</div>
<!-- end #hero-page -->

<!-- section -->
<section class="py-lg-5 py-4">
    <div class="container-xxl">
        <div class="row g-xl-5 g-3 align-items-center">
            <div class="col-lg-6 order-md-2 order-2">

                <h2 class="title"><strong> Smile Center Turkey® </strong></h2>
                <p>Looking for the best dental treatment in Turkey? Look no further than Smile Center Turkey!</p>
                <p>Our skilled team and modern facility are committed to giving you excellent care and assisting you in reaching your dental objectives. In Antalya, we provide various services to meet your needs and surpass your expectations in a beautiful city. Trust us to deliver the perfect smile you've always wanted.</p>
                <h2>Your Trusted Dentist in Turkey</h2>
                <p>At Smile Center Turkey, we believe in providing personalized and attentive care. Our skilled team provides top-notch dental care in Turkey, making each visit a step closer to achieving a perfect smile. We will help you throughout your journey, giving advice and support from the start to the end.</p>
                <h2>Comprehensive Dental Solutions</h2>
                <p>Whether you are seeking the finest dental veneers in Turkey or exploring comprehensive teeth restoration options, we have you covered. Our clinic specializes in a range of dental services, including:</p>
            </div>
            <div class="col-lg-6 order-md-1 order-1">
                <img src="{{ asset('front/img/1.webp') }}" class="img-fluid rounded-1" />
            </div>
        </div>
    </div>
</section>
<!-- end #section -->

<!--dahil hizmet başlangıç-->

<section class="py-lg-5 py-4 position-relative overflow-hidden">
    <div class="container-xxl">
        <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4 position-relative z-1">
            <div class="icon">
                <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="#192D74"></path>
                </svg>
            </div>
            <span class="fs-48 fw-lighter">What Do We Offer You?</span>
        </div>

        <div class="who-list">
            <div class="row">
                <div class="col">
                    <div class="d-flex text-center align-items-center justify-content-center gap-4 flex-column">
                        <div class="who-icon w-125px h-125px d-flex align-items-center justify-content-center bg-primary text-white">
                            <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M317.217,322.571H194.783c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h122.435 c9.22,0,16.696-7.475,16.696-16.696S326.438,322.571,317.217,322.571z"></path> </g> </g> <g> <g> <path d="M317.217,189.006H194.783c-9.22,0-16.696,7.475-16.696,16.696c0,9.22,7.475,16.696,16.696,16.696h122.435 c9.22,0,16.696-7.475,16.696-16.696C333.913,196.481,326.438,189.006,317.217,189.006z"></path> </g> </g> <g> <g> <path d="M317.217,255.789H194.783c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h122.435 c9.22,0,16.696-7.475,16.696-16.696S326.438,255.789,317.217,255.789z"></path> </g> </g> <g> <g> <path d="M495.304,222.397h-94.609v-83.478c0-9.22-7.475-16.696-16.696-16.696h-81.702c25.381-21.432,42.623-39.5,42.623-66.546 c0-31.102-23.196-55.466-52.807-55.466c-15.724,0-27.596,6.69-36.113,15.388c-8.518-8.697-20.39-15.388-36.114-15.388 c-29.611,0-52.807,24.365-52.807,55.466c0,27.046,17.242,45.114,42.623,66.546H128c-9.22,0-16.696,7.475-16.696,16.696v83.478 H16.696C7.475,222.397,0,229.872,0,239.093v256c0,9.22,7.475,16.696,16.696,16.696c4.99,0,457.13,0,478.609,0 c9.22,0,16.696-7.475,16.696-16.696v-256C512,229.872,504.525,222.397,495.304,222.397z M111.304,289.18H83.478 c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h27.826v33.391H83.478c-9.22,0-16.696,7.475-16.696,16.696 s7.475,16.696,16.696,16.696h27.826v89.043H33.391V255.789h77.913V289.18z M200.47,55.678c0-10.97,6.67-22.075,19.417-22.075 c13.975,0,19.604,17.366,20.051,18.818c1.944,7.309,8.492,12.402,16.062,12.402c7.57,0,14.118-5.091,16.062-12.402 c0.446-1.454,6.076-18.818,20.052-18.818c12.747,0,19.416,11.106,19.416,22.075c0,15.147-14.245,27.533-43.88,51.903 c-3.65,3.002-7.562,6.22-11.65,9.623c-4.088-3.405-8.001-6.621-11.65-9.623C214.715,83.211,200.47,70.825,200.47,55.678z M278.261,478.397h-44.522v-55.652h44.522V478.397z M367.304,478.397h-55.652v-72.348c0-9.22-7.475-16.696-16.696-16.696h-77.913 c-9.22,0-16.696,7.475-16.696,16.696v72.348h-55.652c0-2.063,0-313.266,0-322.783c8.106,0,211.791,0,222.609,0 C367.304,158.968,367.304,470.329,367.304,478.397z M478.609,478.397h-77.913v-89.043h27.826c9.22,0,16.696-7.475,16.696-16.696 s-7.475-16.696-16.696-16.696h-27.826v-33.391h27.826c9.22,0,16.696-7.475,16.696-16.696s-7.475-16.696-16.696-16.696h-27.826 v-33.391h77.913V478.397z"></path> </g> </g> </g></svg>
                        </div>
                        <div class="fs-3 fw-normal">B&amp;B Accommodation</div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex text-center align-items-center justify-content-center gap-4 flex-column">
                        <div class="who-icon w-125px h-125px d-flex align-items-center justify-content-center bg-primary text-white">
                            <svg width="78px" height="78px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 17H16M8 17C8 18.1046 7.10457 19 6 19C4.89543 19 4 18.1046 4 17M8 17C8 15.8954 7.10457 15 6 15C4.89543 15 4 15.8954 4 17M16 17C16 18.1046 16.8954 19 18 19C19.1046 19 20 18.1046 20 17M16 17C16 15.8954 16.8954 15 18 15C19.1046 15 20 15.8954 20 17M10 5V11M4 11L4.33152 9.01088C4.56901 7.58593 4.68776 6.87345 5.0433 6.3388C5.35671 5.8675 5.79705 5.49447 6.31346 5.26281C6.8993 5 7.6216 5 9.06621 5H12.4311C13.3703 5 13.8399 5 14.2662 5.12945C14.6436 5.24406 14.9946 5.43194 15.2993 5.68236C15.6435 5.96523 15.904 6.35597 16.425 7.13744L19 11M4 17H3.6C3.03995 17 2.75992 17 2.54601 16.891C2.35785 16.7951 2.20487 16.6422 2.10899 16.454C2 16.2401 2 15.9601 2 15.4V14.2C2 13.0799 2 12.5198 2.21799 12.092C2.40973 11.7157 2.71569 11.4097 3.09202 11.218C3.51984 11 4.0799 11 5.2 11H17.2C17.9432 11 18.3148 11 18.6257 11.0492C20.3373 11.3203 21.6797 12.6627 21.9508 14.3743C22 14.6852 22 15.0568 22 15.8C22 15.9858 22 16.0787 21.9877 16.1564C21.9199 16.5843 21.5843 16.9199 21.1564 16.9877C21.0787 17 20.9858 17 20.8 17H20" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <div class="fs-3 fw-normal">VIP Airport Transfer</div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex text-center align-items-center justify-content-center gap-4 flex-column">
                        <div class="who-icon w-125px h-125px d-flex align-items-center justify-content-center bg-primary text-white">
                            <svg fill="#ffffff" height="86px" width="86px" version="1.1" id="_x31_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <circle cx="24.3" cy="24.4" r="8.5"></circle> <path d="M54,36.7l-14.5,5.3l-14-6.5C24.7,35.2,23.9,35,23,35c-0.8,0-3.5,0-4.2,0c-3.5,0-6.3,2.9-6.4,6.4v26.4 c0,1.8,0.7,3.4,1.9,4.6c0,0,2.3,43.1,2.3,43.3c0,2.9,2.3,5.2,5.2,5.2c2.7,0,5-2.1,5.2-4.8c0,0,0,0,0,0l0-0.3c0,0,0-0.1,0-0.1 c0,0,0,0,0,0l1.4-44.2c0.7-1,1.1-2.3,1.1-3.5V45.5l8.4,3.9c0.9,0.5,2,0.5,2.9,0.2l16-5.8c2-0.8,2.9-2.8,2.3-4.8 C58.1,37,56,36,54,36.7z"></path> <path d="M54.2,6.3c-7.1,0-12.9,3-12.9,6.7c0,1.5,0.9,2.9,2.5,4L40,20.6l8.5-1.6c1.7,0.4,3.6,0.7,5.7,0.7c7.1,0,12.9-3,12.9-6.7 C67,9.3,61.3,6.3,54.2,6.3z"></path> <circle cx="103.4" cy="24.4" r="8.5"></circle> <path d="M108.8,35c-0.8,0-3.5,0-4.2,0c-1,0-2.3,0.4-3,1l-12.5,12l-14.5-5.3c-2-0.8-4.1,0.3-5,2.3c-0.7,2,0.3,4.1,2.3,4.8l16,5.8 c0.9,0.3,2,0.3,2.9-0.2l7.4-5.7l0,18.2c0.1,1.3,0.5,2.6,1.1,3.5l1.4,44.2c0,0,0,0,0,0c0,0,0,0.1,0,0.1l0,0.3c0,0,0,0,0,0 c0.2,2.7,2.4,4.8,5.2,4.8c2.9,0,5.2-2.3,5.2-5.2c0-0.1,2.3-43.3,2.3-43.3c1.2-1.2,1.9-2.8,1.9-4.6V41.4 C115.1,37.9,112.3,35,108.8,35z"></path> </g> </g></svg>
                        </div>
                        <div class="fs-3 fw-normal">Patient Advisor</div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex text-center align-items-center justify-content-center gap-4 flex-column">
                        <div class="who-icon w-125px h-125px d-flex align-items-center justify-content-center bg-primary text-white">
                            <svg height="70px" width="70px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M471.199,231.069L271.6,33.725l0.044,0.093C249.149,11.271,219.501-0.05,189.995,0 c-29.463-0.05-59.112,11.271-81.609,33.818c-22.54,22.49-33.857,52.092-33.815,81.609c-0.042,29.502,11.274,59.147,33.815,81.645 l47.106,46.6c-1.42-0.043-2.842-0.043-4.259-0.043c-38.632,0-73.726,9.714-99.984,26.161 c-13.106,8.245-24.057,18.189-31.846,29.782c-7.832,11.55-12.417,24.835-12.417,38.858v78.719c0,14.016,4.585,27.308,12.417,38.858 c11.732,17.364,30.377,31.15,53.107,40.83c22.773,9.664,49.762,15.113,78.723,15.163c38.579-0.05,73.676-9.758,99.93-26.211 c13.149-8.202,24.054-18.188,31.89-29.781c7.793-11.55,12.374-24.842,12.374-38.858v-35.144l12.554,12.425l-0.043-0.1 c22.494,22.54,52.143,33.868,81.648,33.818c29.466,0.05,59.112-11.278,81.612-33.768c22.54-22.548,33.814-52.143,33.814-81.659 C505.013,283.212,493.739,253.609,471.199,231.069z M141.473,148.686c-19.106-19.149-19.106-50.63,0.272-70.009 c9.346-9.349,21.809-14.525,35.102-14.525L141.473,148.686z M29.896,338.43c0.043-9.026,2.839-17.637,8.482-26.075 c4.95-7.37,12.231-14.432,21.347-20.705l175.312,102.594c-3.986,2.194-8.201,4.259-12.65,6.137 c-20.113,8.567-44.672,13.608-71.152,13.608c-35.38,0.05-67.27-9.026-89.764-23.186c-11.27-7.097-20.16-15.4-26.118-24.283 c-2.205-3.305-4.033-6.645-5.456-10.08V338.43z M272.518,417.15c0,9.026-2.842,17.644-8.474,26.068 c-8.438,12.56-23.418,24.196-43.074,32.542c-19.612,8.338-43.715,13.335-69.736,13.335c-34.735,0-66.029-8.94-87.792-22.684 c-10.908-6.832-19.433-14.848-25.064-23.193c-5.642-8.424-8.439-17.042-8.482-26.068v-32.484 c11.087,12.274,26.211,22.498,44.034,30.054c22.268,9.449,48.798,14.854,77.304,14.854c37.983,0,72.44-9.586,98.005-25.623 c8.98-5.586,16.816-12.045,23.279-19.243V417.15z M272.518,356.44c-0.272,0.688-0.552,1.326-0.918,2.014 c-1.233,2.753-2.749,5.406-4.538,8.065c-3.847,5.772-9.026,11.228-15.164,16.311L78.329,281.29c1.054-0.459,2.065-1.011,3.116-1.42 c19.611-8.338,43.715-13.335,69.79-13.335c10.26,0,20.208,0.781,29.689,2.251c22.637,3.434,42.704,10.762,58.054,20.382 c1.878,1.147,3.667,2.388,5.359,3.628c8.294,5.908,14.847,12.46,19.475,19.293c0.093,0.086,0.183,0.179,0.233,0.265 c5.632,8.438,8.474,17.049,8.474,26.075V356.44z M451.77,374.9c-17.228,17.192-39.639,25.752-62.183,25.752 c-22.588,0-44.991-8.524-62.223-25.752l-0.046-0.043l-31.89-31.524v-4.903c0-14.024-4.581-27.309-12.374-38.858 c-9.801-14.432-24.326-26.39-42.016-35.553c2.201-5.728,4.994-11.966,8.432-18.368c9.714-18.246,24.286-38.041,43.578-53.247 c19.196-15.17,42.798-25.982,71.984-27.638l86.692,85.731h0.046c17.182,17.228,25.749,39.683,25.749,62.223 C477.519,335.268,468.952,357.723,451.77,374.9z"></path> </g> </g></svg>
                        </div>
                        <div class="fs-3 fw-normal">Medicine Package</div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex text-center align-items-center justify-content-center gap-4 flex-column">
                        <div class="who-icon w-125px h-125px d-flex align-items-center justify-content-center bg-primary text-white">
                            <svg height="80px" width="80px" version="1.1" id="x32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M123.671,288.694c1.743,0.582,3.542,0.877,5.347,0.877h0.002c3.898,0,7.694-1.405,10.685-3.944 c6.502-5.52,9.577-14.868,4.827-44.394c-4.204-26.18-10.716-39.891-21.77-45.838c-2.42-1.304-4.983-2.174-7.638-2.593 c0.084-48.796,16.805-93.889,45.986-123.881c24.926-25.629,57.736-39.169,94.888-39.169c37.152,0,69.965,13.54,94.891,39.169 c29.181,29.992,45.902,75.077,45.986,123.881c-2.655,0.419-5.218,1.289-7.638,2.593c-11.054,5.947-17.564,19.658-21.77,45.838 c-1.797,11.18-2.535,19.829-2.25,26.39c-8.6,4.604-23.986,10.31-49.569,12.523c-4.031-6.716-11.219-10.846-18.998-10.846h-14.759 c-12.273,0-22.257,9.984-22.257,22.259c0,12.275,9.984,22.259,22.257,22.259h14.759c8.682,0,16.485-4.992,20.144-12.803 c23.268-1.933,42.473-6.716,57.11-14.239c2.735,1.832,5.854,2.795,9.076,2.795c1.819,0,3.62-0.295,5.351-0.877 c11.772-3.921,36.599-30.753,38.2-88.688c1.642-59.324-18.154-114.658-54.314-151.831C341.563,16.661,301.375,0,255.999,0 c-45.374,0-85.562,16.661-116.218,48.175c-36.158,37.174-55.955,92.507-54.313,151.831 C87.07,257.941,111.897,284.773,123.671,288.694z"></path> <path class="st0" d="M452.727,457.031c-3.758-20.644-17.384-38.198-36.512-46.995l-80.048-32.71 c-12.762-5.862-21.009-18.726-21.009-32.772v-6.452l-2.11,0.73c-5.375,1.864-10.891,2.803-16.398,2.803h-14.759 c-27.612,0-50.077-22.461-50.077-50.077c0-27.608,22.465-50.07,50.077-50.07h14.759c10.305,0,20.204,3.129,28.628,9.053 l0.532,0.373l0.64-0.109c17.624-2.904,25.745-7.516,28.82-9.759l5.264-7.694c5.153-16.561,7.766-32.112,7.766-46.219 c0-74.697-47.23-128.912-112.302-128.912c-65.071,0-112.299,54.216-112.299,128.912c0,61.808,50.2,129.51,50.475,129.751 c1.768,5.132,2.665,10.481,2.665,15.885v11.786c0,14.045-8.248,26.902-20.947,32.741l-80.17,32.771 c-19.076,8.766-32.704,26.328-36.471,47.127L55.003,512h401.995L452.727,457.031z"></path> </g> </g></svg>
                        </div>
                        <div class="fs-3 fw-normal">Online Consulting</div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex text-center align-items-center justify-content-center gap-4 flex-column">
                        <div class="who-icon w-125px h-125px d-flex align-items-center justify-content-center bg-primary text-white">
                            <svg fill="#ffffff" width="95px" height="95px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Mentality_analyst"> <path d="M413.8008,68.2761c-15.976,0-27.2612,13.9021-33.2539,23.7556a5.6084,5.6084,0,0,1-9.644-.1226c-5.6655-9.8459-16.6255-23.633-33.5781-23.633-21.1016,0-38.2076,16.5484-38.2076,36.9616a35.9371,35.9371,0,0,0,.6665,6.8536l-.01.0039c.0181.09.24,1.0952.3379,1.5053,7.6513,32.7181,45.5122,62.3321,64.522,75.4249a19.2593,19.2593,0,0,0,21.8593,0c19.0093-13.0928,56.87-42.7068,64.5215-75.4249.0982-.41.32-1.415.3379-1.5053l-.01-.0039a35.929,35.929,0,0,0,.6666-6.8536C452.0084,84.8245,434.9024,68.2761,413.8008,68.2761Zm-67.6631,51.1946a8.1465,8.1465,0,1,1,8.1465,8.1465A8.1465,8.1465,0,0,1,346.1377,119.4707Zm50.3428,30.3918c-6.8056,6.7139-13.8681,9.1124-20.3262,9.1124-9.2431,0-17.25-4.9112-21.5087-9.1124a6,6,0,0,1,8.4052-8.5644,23.6938,23.6938,0,0,0,8.45,4.8769c5.96,1.8418,11.3741.252,16.5518-4.8554a6,6,0,1,1,8.4277,8.5429Zm.3609-22.2453a8.1464,8.1464,0,1,1,8.1464-8.1465A8.1465,8.1465,0,0,1,396.8414,127.6172Z"></path> <path d="M269.7046,371.7759l.0225-.2852c.9355-17.9424-4.6631-33.1728-16.6406-45.2666-29.669-29.9575-89.5581-31.1335-104.4107-30.9475-1.4931.0188-6.8383-.05-11.063.0012-20.2939.2491-72.396,3.6563-99.4218,30.9463-11.95,12.0655-17.55,27.253-16.6465,45.14.0312,3.1836.5918,68.8506-5.8945,103.7285a17.3929,17.3929,0,0,0,17.1367,20.52H260.4712a17.3889,17.3889,0,0,0,17.1778-20.1436C274.2554,454.3315,266.6861,401.9136,269.7046,371.7759Zm-119.48-64.4942a241.4469,241.4469,0,0,1,25.726,1.4366c-9.1645,25.6123-26.7959,36.8359-33.0756,40.1438-6.2559-3.2864-23.6363-14.355-32.857-39.5a242.1869,242.1869,0,0,1,24.7237-1.9849C137.2134,307.3062,147.5474,307.2827,150.2242,307.2817ZM28.5933,481.644a5.2388,5.2388,0,0,1-1.1465-4.3584c6.8291-36.7168,6.1289-103.3593,6.0957-106.1777l-.0078-.2422c-.7637-14.623,3.544-26.458,13.168-36.1826C59.4258,321.8259,79.357,314.97,97.9864,311.33c8.3838,24.6321,23.7895,38.2259,33.6186,44.7449a11.78,11.78,0,0,1,5.2657,9.8242V483.6128H79.47a285.0748,285.0748,0,0,0,3.4272-61.81,6,6,0,0,0-11.9648.916,280.0677,280.0677,0,0,1-3.6377,60.8936H32.7867A5.439,5.439,0,0,1,28.5933,481.644Zm235.99.0713a5.3334,5.3334,0,0,1-4.1123,1.8975H224.79a280.0977,280.0977,0,0,1-3.6377-60.8936,6,6,0,0,0-11.9648-.916,285.1047,285.1047,0,0,0,3.4272,61.81H148.8707V365.8987a11.7689,11.7689,0,0,1,5.2548-9.8172c9.9532-6.6008,25.6333-20.4611,33.9473-45.6938,20.0337,3.3474,42.58,10.228,56.502,24.2954,9.5937,9.6934,13.9043,21.4863,13.1757,36.0449-3.0107,30.418,3.7491,79.8545,8.0508,106.6436A5.3158,5.3158,0,0,1,264.5835,481.7153Z"></path> <path d="M143.0044,182.0562c-29.85,0-54.1347,23.0205-54.1347,51.3164s24.2851,51.3164,54.1347,51.3164,54.1348-23.0205,54.1348-51.3164S172.8541,182.0562,143.0044,182.0562Zm0,90.6328c-23.2334,0-42.1347-17.6377-42.1347-39.3164s18.9013-39.3164,42.1347-39.3164,42.1348,17.6376,42.1348,39.3164S166.2378,272.689,143.0044,272.689Z"></path> <path d="M157.37,242.9553h-28.731a5.112,5.112,0,0,0-4.86,6.6814c1.8672,5.8535,6.7027,13.4331,19.2251,13.4331s17.3584-7.58,19.2256-13.4333A5.1119,5.1119,0,0,0,157.37,242.9553Z"></path> <path d="M171.2,413.5852a8.7886,8.7886,0,1,0,8.788,8.7886A8.7885,8.7885,0,0,0,171.2,413.5852Z"></path> <path d="M171.2,443.7808a8.7886,8.7886,0,1,0,8.788,8.7885A8.7883,8.7883,0,0,0,171.2,443.7808Z"></path> <path d="M210.939,366.4873H187.4708a4.9106,4.9106,0,0,0-4.9107,4.9106v11.7344a16.6448,16.6448,0,1,0,33.29,0V371.3979A4.9106,4.9106,0,0,0,210.939,366.4873Z"></path> <path d="M291.5674,224.2461a6,6,0,0,0,6,6H367.93a6,6,0,0,0,0-12H297.5674A6,6,0,0,0,291.5674,224.2461Z"></path> <path d="M297.5674,253.9971h39.877a6,6,0,0,0,0-12h-39.877a6,6,0,0,0,0,12Z"></path> <path d="M236.3218,283.1782a1.0134,1.0134,0,0,1,.1172-1.1543l22.2725-28.8017a22.6051,22.6051,0,0,0,4.7011-13.7618V135.854a6,6,0,0,0-12,0V239.46a10.551,10.551,0,0,1-2.1933,6.4209l-22.2725,28.8018a13.0961,13.0961,0,0,0,10.36,21.1084H393.6978a6,6,0,0,0,0-12H237.3072A1.0151,1.0151,0,0,1,236.3218,283.1782Z"></path> <path d="M474.146,16.3872H273.91a22.5221,22.5221,0,0,0-22.4971,22.4971V82.6694a6,6,0,0,0,12,0V38.8843A10.509,10.509,0,0,1,273.91,28.3872H474.146a10.509,10.509,0,0,1,10.4971,10.4971v234.41a10.509,10.509,0,0,1-10.4971,10.4971H460.2134a6,6,0,0,0,0,12H474.146a22.5221,22.5221,0,0,0,22.4971-22.4971V38.8843A22.5221,22.5221,0,0,0,474.146,16.3872Z"></path> <path d="M91.8951,151.1387h89.854a21.38,21.38,0,0,0,21.3559-21.3555V114.7437h73.9087a6,6,0,0,0,0-12H203.105V82.3818a21.38,21.38,0,0,0-21.3559-21.3559H91.8951a21.38,21.38,0,0,0-21.356,21.3559v47.4014A21.38,21.38,0,0,0,91.8951,151.1387Zm-9.356-68.7569a9.3668,9.3668,0,0,1,9.356-9.3559h89.854a9.3667,9.3667,0,0,1,9.3559,9.3559v47.4014a9.3664,9.3664,0,0,1-9.3559,9.3555H91.8951a9.3664,9.3664,0,0,1-9.356-9.3555Z"></path> <path d="M103.4332,99.6694h66.8623a6,6,0,0,0,0-12H103.4332a6,6,0,0,0,0,12Z"></path> <path d="M103.4332,120.6885h33.3891a6,6,0,0,0,0-12H103.4332a6,6,0,0,0,0,12Z"></path> <path d="M452.857,342.4731h-8.7593c.0142-.1679.0254-.3369.0254-.5087V301.1772a22.6027,22.6027,0,0,0-8.6978-17.746l-23.8193-18.462a6,6,0,1,0-7.3516,9.4844l23.8194,18.4619a10.5218,10.5218,0,0,1,4.0493,8.2617v40.7872c0,.1718.0117.3408.0259.5087H384.16A21.38,21.38,0,0,0,362.8038,363.83V411.231A21.38,21.38,0,0,0,384.16,432.5864H452.857a21.38,21.38,0,0,0,21.3559-21.3554V363.83A21.38,21.38,0,0,0,452.857,342.4731Zm9.3559,68.7579a9.3666,9.3666,0,0,1-9.3559,9.3554H384.16a9.3666,9.3666,0,0,1-9.3559-9.3554V363.83a9.3669,9.3669,0,0,1,9.3559-9.3565H452.857a9.3669,9.3669,0,0,1,9.3559,9.3565Z"></path> <path d="M441.4034,369.1167H395.6978a6,6,0,0,0,0,12h45.7056a6,6,0,0,0,0-12Z"></path> <path d="M423.0269,390.1362H395.6978a6,6,0,0,0,0,12h27.3291a6,6,0,0,0,0-12Z"></path> </g> </g></svg>
                        </div>
                        <div class="fs-3 fw-normal">Check-Up Service</div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- dahil hizmet bitis-->

<!-- section -->
<section class="py-lg-5 py-4">
    <div class="container-xxl">
        <div class="row g-xl-5 g-3 align-items-center">
            <div class="col-lg-6 order-md-1 order-2">

                <strong><h3>Contact Us</h3></strong>
                <p>Smile Center Turkey&reg; takes pride in being a <a href="https://find-and-update.company-information.service.gov.uk/company/14082492">registered company in London </a>and Turkey, ensuring a seamless experience for our patients from the UK and all around the world.</p>
                <p>Ready to embark on a journey to a brighter, more confident you?&nbsp;<a href="https://smilecenterturkey.co/contact">Contact</a> Smile Center Turkey now for a beautiful and healthy smile.</p>
                <p>We know it's important to feel confident and look your best. That's why we offer advanced hair transplant solutions that can help you rediscover your youthful charm. Our experts work hard to give you long-lasting, natural results, so you can feel confident about how you look.</p>
                <p>When you choose Smile Center Turkey, you're choosing a dental clinic that is committed to excellence. Our reputation speaks for itself, as we are known for our trustworthiness, innovation, and customer satisfaction. We believe in delivering the highest quality care at every step, ensuring that you receive the best possible treatment.</p>
                <p>A bright smile can change your life, making you feel better about yourself and giving you the courage to face anything. Whether you're looking to restore your hair or improve your dental health, we are here to help. Our friendly and knowledgeable team is ready to guide you through your journey to a brighter, more confident you.</p>
                <p>Don't wait any longer to start your transformation.<a href="https://smilecenterturkey.co/contact">Contact</a> Smile Center Turkey today and take the first step towards a beautiful and healthy smile. Our dedicated staff is eager to answer any questions you may have and assist you in scheduling your appointment. Let us help you regain your youthful charm and achieve the smile of your dreams.</p>


            </div>
            <div class="col-lg-6 order-md-2 order-1">
                <img src="{{asset('front/img/as.jpg')}}" class="img-fluid rounded-1" />
            </div>
        </div>
    </div>
</section>
<!-- end #section -->

<section class="py-lg-5 py-4">
    <div class="container-xxl">
        <div class="bg-primary rounded-4 p-xl-5 p-4 mb-3">
            <div class="row g-4">
                <div class="col-lg-4 text-md-start text-center">
                    <div class="icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_1_911" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="64" height="64">
                                <rect width="63.0507" height="63.0507" fill="#D9D9D9"></rect>
                            </mask>
                            <g mask="url(#mask0_1_911)">
                                <path d="M28.8983 55.1689V49.9147H49.9152V31.2622C49.9152 26.1393 48.131 21.7936 44.5625 18.2251C40.994 14.6566 36.6483 12.8724 31.5254 12.8724C26.4026 12.8724 22.0569 14.6566 18.4884 18.2251C14.9199 21.7936 13.1356 26.1393 13.1356 31.2622V47.2876H10.5085C9.06362 47.2876 7.82669 46.7731 6.79773 45.7441C5.76878 44.7152 5.2543 43.4783 5.2543 42.0333V36.7791C5.2543 35.8596 5.48418 34.9949 5.94392 34.1848C6.40367 33.3748 7.0495 32.729 7.88142 32.2473L8.07845 28.7664C8.42873 25.789 9.29349 23.0306 10.6727 20.491C12.052 17.9515 13.7815 15.7403 15.8613 13.8575C17.9411 11.9748 20.3274 10.508 23.0202 9.45713C25.713 8.40628 28.5481 7.88086 31.5254 7.88086C34.5028 7.88086 37.327 8.40628 39.9979 9.45713C42.6688 10.508 45.0551 11.9638 47.1568 13.8247C49.2585 15.6856 50.988 17.8858 52.3453 20.4253C53.7027 22.9649 54.5784 25.7233 54.9725 28.7007L55.1695 32.116C56.0014 32.5101 56.6472 33.1012 57.107 33.8893C57.5667 34.6774 57.7966 35.5093 57.7966 36.3851V42.4274C57.7966 43.3031 57.5667 44.135 57.107 44.9232C56.6472 45.7113 56.0014 46.3024 55.1695 46.6965V49.9147C55.1695 51.3596 54.655 52.5965 53.626 53.6255C52.5971 54.6544 51.3602 55.1689 49.9152 55.1689H28.8983ZM23.6441 36.7791C22.8998 36.7791 22.2758 36.5274 21.7723 36.0238C21.2688 35.5203 21.017 34.8964 21.017 34.152C21.017 33.4077 21.2688 32.7837 21.7723 32.2802C22.2758 31.7767 22.8998 31.5249 23.6441 31.5249C24.3885 31.5249 25.0124 31.7767 25.5159 32.2802C26.0195 32.7837 26.2712 33.4077 26.2712 34.152C26.2712 34.8964 26.0195 35.5203 25.5159 36.0238C25.0124 36.5274 24.3885 36.7791 23.6441 36.7791ZM39.4068 36.7791C38.6624 36.7791 38.0385 36.5274 37.535 36.0238C37.0314 35.5203 36.7797 34.8964 36.7797 34.152C36.7797 33.4077 37.0314 32.7837 37.535 32.2802C38.0385 31.7767 38.6624 31.5249 39.4068 31.5249C40.1511 31.5249 40.7751 31.7767 41.2786 32.2802C41.7821 32.7837 42.0339 33.4077 42.0339 34.152C42.0339 34.8964 41.7821 35.5203 41.2786 36.0238C40.7751 36.5274 40.1511 36.7791 39.4068 36.7791ZM15.8284 32.7071C15.5219 28.0659 16.9231 24.0814 20.0318 20.7537C23.1406 17.426 27.0156 15.7622 31.6568 15.7622C35.5537 15.7622 38.9799 16.9991 41.9354 19.473C44.8909 21.9469 46.6751 25.1104 47.2881 28.9635C43.3037 28.9197 39.6367 27.8469 36.2871 25.7452C32.9375 23.6435 30.3651 20.7975 28.5699 17.2071C27.8694 20.7099 26.3916 23.8296 24.1367 26.5662C21.8817 29.3028 19.1123 31.3497 15.8284 32.7071Z" fill="#A3FFB7"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="py-4 d-flex flex-column gap-2">
                        <div class="fs-4 fw-semibold text-success">FAQ</div>
                        <div class="fs-5 text-white">Didn’t find your question?</div>
                    </div>
                    <div class="fs-5 text-white">You can ask all your questions about our treatments in Turkey right now!</div>
                    <div class="mt-4 pt-lg-3">
                        <a href="#" class="btn btn-success rounded-pill text-white fs-18 fw-semibold px-5">Ask Now</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="fs-3 fw-semibold text-white pb-4 text-md-start text-center">FAQ</div>
                    <div class="faq-list">
                        <div class="menu-box pb-3">
                            <div class="menu-box-item bg-white bg-opacity-10 text-white rounded-1 py-3 px-4">
                                <div class="heading d-flex align-items-center justify-content-between fw-normal fs-5">
                                    Which areas do your health tourism services cover?
                                    <div class="icon">
                                        <svg width="28" height="28" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g mask="url(#mask0_1_1401)">
                                                <path d="M28.3256 10.2998V41.6509L13.9054 27.2307L10.3003 30.9001L30.9006 51.5005L51.501 30.9001L47.8959 27.2307L33.4757 41.6509V10.2998H28.3256Z" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="menu-box-item-content pt-4 text-white">
                                    <p>Our health tourism services are offered in the fields of hair transplantation, dental treatment and plastic surgery. We provide safe and quality health services with our expert doctors.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="menu-box pb-3">
                            <div class="menu-box-item bg-white bg-opacity-10 text-white rounded-1 py-3 px-4">
                                <div class="heading d-flex align-items-center justify-content-between fw-normal fs-5">
                                    How does the treatment process work within the scope of health tourism?
                                    <div class="icon">
                                        <svg width="28" height="28" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g mask="url(#mask0_1_1401)">
                                                <path d="M28.3256 10.2998V41.6509L13.9054 27.2307L10.3003 30.9001L30.9006 51.5005L51.501 30.9001L47.8959 27.2307L33.4757 41.6509V10.2998H28.3256Z" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="menu-box-item-content pt-4 text-white">
                                    <p>The treatment process first starts with an online counselling. At this stage, the most appropriate treatment plan for your condition is determined. When you come to Turkey for treatment, you can benefit from transport and accommodation services, and you can also get support for post-treatment care processes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="menu-box pb-3">
                            <div class="menu-box-item bg-white bg-opacity-10 text-white rounded-1 py-3 px-4">
                                <div class="heading d-flex align-items-center justify-content-between fw-normal fs-5">
                                    Do you provide communication and language support for foreign patients?
                                    <div class="icon">
                                        <svg width="28" height="28" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g mask="url(#mask0_1_1401)">
                                                <path d="M28.3256 10.2998V41.6509L13.9054 27.2307L10.3003 30.9001L30.9006 51.5005L51.501 30.9001L47.8959 27.2307L33.4757 41.6509V10.2998H28.3256Z" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="menu-box-item-content pt-4 text-white">
                                    <p>Yes, we offer communication and language support for our foreign patients. Our multilingual team guides you through your treatment process and ensures that you can communicate comfortably at every step.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- map -->
<div id="map" class="h-500px"></div>
<!-- end #map -->

<x-filament-fabricator::page-blocks :blocks="$page->blocks" />

{{ \Filament\Facades\Filament::renderHook('filament-fabricator.scripts.start') }}

@foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getScripts() as $name => $path)
    @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
        {!! $path !!}
    @else
        <script defer src="{{ $path }}"></script>
    @endif
@endforeach

@stack('scripts')

{{ \Filament\Facades\Filament::renderHook('filament-fabricator.scripts.end') }}

{{ \Filament\Facades\Filament::renderHook('filament-fabricator.body.end') }}

<script src="{{asset('front/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/fancybox.umd.js')}}"></script>
<script src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
<script>
    mapboxgl.accessToken = "pk.eyJ1Ijoidm9sa2Fua2FyYXRhcyIsImEiOiJjaWtza3BmNWwwMDAyd3NrcnUyZGptNHJ6In0._zEoaXwKsNTzu3zv8Q-FGA";
    var map = new mapboxgl.Map({
        style: "mapbox://styles/mapbox/light-v11",
        center: [30.70673, 36.88584],
        zoom: 13,
        container: "map",
        antialias: true,
    });
    var pos = [30.70673, 36.88584];
    map.on("load", function () {
        var layers = map.getStyle().layers;

        var labelLayerId;
        for (var i = 0; i < layers.length; i++) {
            if (layers[i].type === "symbol" && layers[i].layout["text-field"]) {
                labelLayerId = layers[i].id;
                break;
            }
        }
        map.addLayer(
            {
                id: "3d-buildings",
                source: "composite",
                "source-layer": "building",
                filter: ["==", "extrude", "true"],
                type: "fill-extrusion",
                zoom: 50,
                paint: {
                    "fill-extrusion-color": "#ccc",

                    // use an 'interpolate' expression to add a smooth transition effect to the
                    // buildings as the user zooms in
                    "fill-extrusion-height": ["interpolate", ["linear"], ["zoom"], 15, 0, 15.05, ["get", "height"]],
                    "fill-extrusion-base": ["interpolate", ["linear"], ["zoom"], 15, 0, 15.05, ["get", "min_height"]],
                    "fill-extrusion-opacity": 0.6,
                },
            },
            labelLayerId
        );
    });
    var popup = new mapboxgl.Popup({ offset: 25 }).setText("Buraya adres girilecek");

    // create DOM element for the marker
    var el = document.createElement("div");
    //el.id = 'marker';
    el.classList.add("marker-pin");

    // create the marker
    new mapboxgl.Marker(el)
        .setLngLat(pos)
        .setPopup(popup) // sets a popup on this marker
        .addTo(map);
</script>
</body>

</html>

