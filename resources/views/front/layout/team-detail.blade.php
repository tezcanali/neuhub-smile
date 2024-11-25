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

    {!! seo()->for($team) !!}

    <link rel="stylesheet" href="{{ asset('front/css/fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}" />

</head>
<body>
@include('front.layout.header')

<div class="hero-page w-100 h-450px overflow-hidden position-relative">
    <div class="container-xxl position-relative z-3 h-100 py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-text-primary dark mb-lg-4 mb-2">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/teams">Teams</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $team->name }}</li>
            </ol>
        </nav>
        <div class="d-flex gap-3 mt-md-4 mt-3">
            <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-md-4 mt-3">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor" />
            </svg>
            <div class="d-flex flex-column gap-1">
                <div class="fs-54 fw-bold">{{ $team->name }}</div>
                <div class="fs-4 fw-lighter">{{ $team->job_title }}</div>
            </div>
        </div>
    </div>
    <div class="overlay position-absolute start-0 top-0 w-100 h-100 bg-primary bg-opacity-25 z-1"></div>
    <img src="{{asset('front/img/detay.jpg')}}" class="position-absolute start-0 top-0 w-100 h-100 object-fit-cover" style="filter: grayscale(1)" />
</div>

<div class="page page-margin-detail pb-lg-5 pb-4 position-relative">
    <div class="shape position-absolute top-50 mt-n5 start-0 end-0">
        <svg width="100%" height="279" viewBox="0 0 1920 279" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-n5">
            <path
                d="M1939.4 0C1938.36 1.39378 1937.26 2.82739 1936.22 4.22117C1926.2 17.6413 1916.66 30.3048 1902.3 41.8135C1889.28 52.2071 1869.91 59.2158 1851.09 66.0255C1835.26 71.7599 1820.28 77.1757 1808.61 84.4632C1796.45 92.0693 1790.28 101.467 1784.23 110.547C1772.98 127.511 1763.2 142.126 1717.36 140.015C1642.07 136.471 1578.75 135.794 1506.57 161.599C1492.15 166.736 1477.3 172.311 1462.88 177.687C1431.16 189.554 1398.4 201.82 1365.15 211.775C1325.24 223.722 1291.81 229.616 1259.91 230.452C1223.73 231.368 1189.32 225.633 1155.95 220.058C1110.54 212.452 1063.6 204.607 1013.31 214.284C1001.51 216.554 989.349 219.859 974.925 224.638C963.13 228.54 951.395 232.961 940.028 237.262C899.936 252.354 862.044 266.611 819.934 261.991C774.036 256.934 747.023 232.324 720.865 208.55C715.854 204.01 710.903 199.47 705.831 195.13C691.957 183.183 672.033 171.674 651.132 163.55C616.784 150.21 584.454 148.139 560.008 157.736C530.183 169.444 528.166 188.24 526.271 206.439C525.171 217.111 524.01 228.142 517.226 237.779C502.925 258.407 459.105 272.823 405.689 274.575C393.894 274.934 381.976 274.655 370.364 273.739C334.855 270.951 299.408 263.863 265.122 256.974C240.37 251.996 214.701 246.859 189.032 243.315C153.279 238.377 117.221 236.425 81.6512 236.425C54.0267 236.425 26.6467 237.62 0 239.492V243.474C60.7495 239.253 124.799 238.496 187.81 247.217C213.234 250.722 238.72 255.859 263.411 260.797C297.941 267.726 333.694 274.894 369.753 277.721C378.309 278.398 386.988 278.756 395.666 278.756C399.15 278.756 402.633 278.717 406.056 278.597C462.649 276.765 507.386 261.752 522.849 239.492C530.061 229.178 531.283 217.788 532.444 206.758C534.339 188.798 536.111 171.833 563.247 161.201C593.438 149.334 629.374 159.767 648.076 167.055C668.305 174.94 687.618 186.05 701.003 197.599C706.014 201.939 710.964 206.439 715.915 210.939C742.745 235.39 770.492 260.637 818.896 265.973C863.144 270.832 903.786 255.54 943.022 240.766C954.329 236.505 966.063 232.124 977.675 228.222C991.732 223.563 1003.59 220.337 1015.02 218.147C1063.67 208.828 1107.73 216.196 1154.42 223.961C1188.16 229.616 1223 235.43 1260.09 234.474C1292.79 233.638 1326.95 227.585 1367.6 215.439C1401.09 205.404 1434.03 193.099 1465.81 181.192C1480.17 175.816 1495.02 170.241 1509.39 165.103C1580.1 139.816 1642.56 140.493 1716.81 143.998C1767.05 146.387 1778.05 129.741 1789.73 112.14C1795.53 103.419 1801.46 94.4188 1812.71 87.3702C1823.83 80.4013 1838.44 75.1448 1853.9 69.5298C1873.21 62.5609 1893.13 55.3132 1906.89 44.3621C1921.74 32.495 1931.33 19.6324 1941.54 6.01318C1943.01 4.02206 1944.53 2.03094 1946 0.0398224H1939.4V0Z"
                fill="currentcolor"
            />
        </svg>
    </div>
    <div class="container-xxl position-relative z-2">
        <div class="row">
            <div class="col-lg-4">
                <div class="doctor-image">
                    <div class="image position-relative">
                        <div class="position-absolute start-0 top-50 translate-middle-y ms-n5">
                            <img src="{{asset('front/img/teeth-3.png')}}" class="h-150px" />
                        </div>
                        <div class="shape position-absolute start-0 bottom-0 ms-3 mb-n4">
                            <svg width="50" height="53" viewBox="0 0 50 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M24.7014 0.916366C21.3073 22.3567 0 28.4146 0 28.4146C7.8029 28.4146 23.1196 36.1929 24.7014 50.5598V53C24.7014 52.4131 24.7239 51.836 24.7678 51.2689C24.8116 51.836 24.8342 52.4131 24.8342 53V50.5598C26.4159 36.1929 41.7326 28.4146 49.5355 28.4146C49.5355 28.4146 28.2283 22.3567 24.8342 0.916366V0C24.813 0.160558 24.7909 0.32028 24.7678 0.479169C24.7447 0.32028 24.7225 0.160558 24.7014 0V0.916366Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($team->image) }}" class="w-100 h-400px mobile-img object-fit-cover" />
                    </div>
                    <div class="bg-primary p-4">
                        <div class="p-lg-2">
                            <div class="d-flex flex-column">
                                <div class="fs-5 fw-semibold text-white">{{ $team->name }}</div>
                                <span class="text-gray-600">{{ $team->job_title }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex gap-2 my-3">
                    @foreach($team->social as $item)
                        <a href="{{ $item['url'] }}" class="w-40px h-40px d-flex align-items-center justify-content-center rounded-circle bg-primary text-white">
                            <i class="fab {{ $item['platform'] }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">
                <div class="bg-white p-lg-5 p-4">
                    {!! $team->content !!}
                </div>
                @if($team->associations)
                    <div class="px-lg-5 px-4 py-4 bg-primary text-white fs-5 fw-semibold">Member Associations</div>
                    <div class="bg-white p-lg-5 p-4">
                        {!! $team->associations !!}
                    </div>
                @endif
                @if($team->publications)
                    <div class="px-lg-5 px-4 py-4 bg-primary text-white fs-5 fw-semibold">Publications</div>
                    <div class="bg-white p-lg-5 p-4">
                        {!! $team->publications !!}
                    </div>
                @endif
            </div>
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

