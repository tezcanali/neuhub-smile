<!DOCTYPE html>
<html lang="en">
<head>
    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.start') }}
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/favicon-16x16.png')}}" />
    <link rel="shortcut icon" href="{{asset('front/favicon.png')}}" />
    <link rel="mask-icon" href="{{asset('front/safari-pinned-tab.svg')}}" color="#FFF" />
    <meta name="msapplication-TileColor" content="#FFF" />
    <meta name="theme-color" content="#FFF" />

    {!! seo()->for($category) !!}

    <link rel="stylesheet" href="{{ asset('front/css/fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}" />

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,tr',
                autoDisplay: false
            }, 'google_translate_element');

            setTimeout(function () {
                var langSelect = document.querySelector(".goog-te-combo");
                if (langSelect) {
                    langSelect.value = "tr";
                    langSelect.dispatchEvent(new Event("change"));

                    document.cookie = "googtrans=/en/tr; path=/";
                }
            }, 500);
        }

        window.onload = function () {
            if (!document.cookie.includes("googtrans=/en/tr")) {
                document.cookie = "googtrans=/en/tr; path=/";
                location.reload();
            }
        };
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
@include('front.layout.header')

<div class="hero-page w-100 h-250px overflow-hidden position-relative">
    <div class="container-xxl position-relative z-3 h-100 py-4 d-flex justify-content-center flex-column">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-text-primary dark mb-lg-3 mb-2">
                <li class="breadcrumb-item"><a href="/">Smile Center Turkey</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center gap-3 text-primary">
            <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor" />
            </svg>
            <div class="fs-54 fw-bold text-primary">{{ $category->title }}</div>
        </div>
    </div>
    <div class="overlay position-absolute start-0 top-0 w-100 h-100 bg-primary bg-opacity-25 z-1"></div>
    <img src="{{asset('front/img/blog.jpg')}}" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" style="filter: grayscale(1)" />
</div>
<!-- end #hero-page -->

<!-- page -->
<div class="page py-lg-5 py-4">
    <div class="container-xxl">
        <div class="bg-white rounded-3 p-2 d-flex flex-wrap align-items-center gap-2 mb-4">
            <a href="/before-after" class="fw-normal bg-gray-100 rounded-1 py-2 px-4">All</a>
            @foreach($categories as $item)
                <a href="/before-after/category/{{$item->slug}}" class="fw-normal {{ $category->slug == $item->slug ? 'bg-secondary text-white' : 'bg-gray-100' }} rounded-1 py-2 px-4">{{ $item->title }}</a>
            @endforeach
        </div>
        <div class="row g-4">
            @foreach($category->gallery()->orderBy('created_at', 'desc')->get() as $item)
                <div class="col-lg-3">
                    <a href="/before-after/{{$item->slug}}" class="d-block w-100 h-300px rounded-3 overflow-hidden position-relative">
                        <div class="position-absolute start-0 bottom-0 m-2 bg-white text-primary fs-13 rounded-1 py-2 px-3 fw-semibold z-1">{{ $item->title }}</div>
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($item['featured_image']) }}" class="w-100 h-100 object-fit-cover" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- map -->
<div id="map" class="h-500px"></div>
<!-- end #map -->

@include('front.layout.footer')

@stack('scripts')

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

