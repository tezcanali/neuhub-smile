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
<div class="hero-page w-100 h-300px overflow-hidden position-relative">
    <div class="container-xxl position-relative z-3 h-100 py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-text-primary dark mb-lg-4 mb-2">
                <li class="breadcrumb-item"><a href="#">Smile Center Turkey</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center gap-3 mt-md-5 mt-3">
            <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="#192D74" />
            </svg>
            <div class="fs-54 fw-bold">Blog</div>
        </div>
    </div>
    <div class="overlay position-absolute start-0 top-0 w-100 h-100 bg-primary bg-opacity-25 z-1"></div>
    <img src="{{asset('front/img/blog.jpg')}}" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" style="filter: grayscale(1)" />
</div>
<!-- end #hero-page -->

<!-- page -->
<div class="page page-margin pb-lg-5 pb-4">
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-8">
                <img src="{{asset('front/img/blog.png')}}" class="mobile-img w-100 h-500px object-fit-cover" />
                <div class="bg-primary p-lg-5 p-4">
                    <div class="d-flex align-items-center gap-md-4 gap-md-3 gap-2 flex-wrap pb-4">
                        <span class="fs-14 text-gray-600">Oral and Dental Health</span>
                        <div class="d-flex align-items-center gap-2 fs-14 text-gray-600">
                            <i class="far fa-eye"></i>
                            <span>360views</span>
                        </div>
                    </div>
                    <div class="fs-3 fw-semibold text-white lh-sm pb-3">Methods of Teeth Whitening at Home and Correct Application Techniques</div>
                    <p class="text-gray-600">A glamorous smile is one of the important elements that strengthen the first impression.</p>
                    <span class="fs-14 text-gray-600 d-block mt-4">24.06.2023</span>
                    <a href="#" class="d-flex align-items-center gap-2 text-white fs-13 fw-semibold ls-1 mt-4">
                        READ MORE
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="blog-list pt-3 row g-3">
                    <div class="col-lg-6">
                        <a href="#" class="d-block hover-img-scale bg-white">
                            <div class="image overflow-hidden">
                                <img src="{{asset('front/img/blog/1.png')}}" class="w-100 h-250px object-fit-cover" />
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center gap-md-4 gap-md-3 gap-2 flex-wrap pb-3">
                                    <span class="fs-14">Oral and Dental Health</span>
                                    <div class="d-flex align-items-center gap-2 fs-14">
                                        <i class="far fa-eye"></i>
                                        <span>360views</span>
                                    </div>
                                </div>
                                <div class="fs-4 fw-semibold pb-3">Effective Products Against Bad Breath and Their Use</div>
                                <p class="fs-14 text-primary text-opacity-50 mb-3">A glamorous smile is one of the important elements that strengthen the first impression.</p>
                                <span class="fs-14 text-primary text-opacity-75 d-block">24.06.2023</span>
                                <span class="d-flex align-items-center gap-2 fs-13 fw-semibold ls-1 mt-4">
                                            READ MORE
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="d-block hover-img-scale bg-white">
                            <div class="image overflow-hidden">
                                <img src="{{asset('front/img/blog/2.png')}}" class="w-100 h-250px object-fit-cover" />
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center gap-md-4 gap-md-3 gap-2 flex-wrap pb-3">
                                    <span class="fs-14">Oral and Dental Health</span>
                                    <div class="d-flex align-items-center gap-2 fs-14">
                                        <i class="far fa-eye"></i>
                                        <span>360views</span>
                                    </div>
                                </div>
                                <div class="fs-4 fw-semibold pb-3">Effective Products Against Bad Breath and Their Use</div>
                                <p class="fs-14 text-primary text-opacity-50 mb-3">A glamorous smile is one of the important elements that strengthen the first impression.</p>
                                <span class="fs-14 text-primary text-opacity-75 d-block">24.06.2023</span>
                                <span class="d-flex align-items-center gap-2 fs-13 fw-semibold ls-1 mt-4">
                                            READ MORE
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="d-block hover-img-scale bg-white">
                            <div class="image overflow-hidden">
                                <img src="{{asset('front/img/blog/3.png')}}" class="w-100 h-250px object-fit-cover" />
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center gap-md-4 gap-md-3 gap-2 flex-wrap pb-3">
                                    <span class="fs-14">Oral and Dental Health</span>
                                    <div class="d-flex align-items-center gap-2 fs-14">
                                        <i class="far fa-eye"></i>
                                        <span>360views</span>
                                    </div>
                                </div>
                                <div class="fs-4 fw-semibold pb-3">Effective Products Against Bad Breath and Their Use</div>
                                <p class="fs-14 text-primary text-opacity-50 mb-3">A glamorous smile is one of the important elements that strengthen the first impression.</p>
                                <span class="fs-14 text-primary text-opacity-75 d-block">24.06.2023</span>
                                <span class="d-flex align-items-center gap-2 fs-13 fw-semibold ls-1 mt-4">
                                            READ MORE
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="d-block hover-img-scale bg-white">
                            <div class="image overflow-hidden">
                                <img src="{{asset('front/img/blog/4.png')}}" class="w-100 h-250px object-fit-cover" />
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center gap-md-4 gap-md-3 gap-2 flex-wrap pb-3">
                                    <span class="fs-14">Oral and Dental Health</span>
                                    <div class="d-flex align-items-center gap-2 fs-14">
                                        <i class="far fa-eye"></i>
                                        <span>360views</span>
                                    </div>
                                </div>
                                <div class="fs-4 fw-semibold pb-3">Effective Products Against Bad Breath and Their Use</div>
                                <p class="fs-14 text-primary text-opacity-50 mb-3">A glamorous smile is one of the important elements that strengthen the first impression.</p>
                                <span class="fs-14 text-primary text-opacity-75 d-block">24.06.2023</span>
                                <span class="d-flex align-items-center gap-2 fs-13 fw-semibold ls-1 mt-4">
                                            READ MORE
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                            </div>
                        </a>
                    </div>
                </div>
                <!--
                <div class="mt-md-5 mt-4 pt-md-5 pt-4 mb-md-0 mb-3 border-top border-primary border-opacity-10 d-flex align-items-center justify-content-md-between justify-content-center">
                    <a href="#" class="d-md-flex d-none align-items-center gap-3 flex-1 text-primary">
                        <i class="fa fa-arrow-left"></i>
                        <span class="fw-normal">Önceki</span>
                    </a>
                    <nav>
                        <ul class="pagination pagination mb-0">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link rounded-0">1</span>
                            </li>
                            <li class="page-item"><a class="page-link rounded-0" href="#">2</a></li>
                            <li class="page-item"><a class="page-link rounded-0" href="#">3</a></li>
                            <li class="page-item"><a class="page-link rounded-0" href="#">...</a></li>
                            <li class="page-item"><a class="page-link rounded-0" href="#">8</a></li>
                            <li class="page-item"><a class="page-link rounded-0" href="#">9</a></li>
                            <li class="page-item"><a class="page-link rounded-0" href="#">10</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="d-md-flex d-none align-items-center justify-content-end gap-3 flex-1 text-primary">
                        <span class="fw-normal">İleri</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div> -->
            </div>
            <div class="col-lg-4">
                <div class="sidemenu mt-lg-0 mt-3">
                    <div class="title h-70px bg-primary px-4 d-flex align-items-center text-white fs-5 fw-semibold">
                        <div class="px-2">Categories</div>
                    </div>
                    @php
                        $blogCategories = \App\Models\BlogCategory::all();
                    @endphp
                    <div class="bg-white p-4">
                        <div class="d-flex flex-column gap-3 p-2">
                            @foreach($blogCategories as $category)
                                <a href="/{{ $category->slug }}" class="d-block">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end #page -->

<!-- map -->
<div id="map" class="h-500px"></div>

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

