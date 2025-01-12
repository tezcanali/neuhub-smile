@php use Z3d0X\FilamentFabricator\Facades\FilamentFabricator; @endphp
@php use Illuminate\Support\Str; @endphp
@php use Filament\Facades\Filament; @endphp
@props(['page'])
    <!DOCTYPE html>
<html lang="en">
<head>
    {{ Filament::renderHook('filament-fabricator.head.start') }}
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front/apple-touch-icon.png')}}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/favicon-32x32.png')}}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/favicon-16x16.png')}}"/>
    <link rel="shortcut icon" href="{{asset('front/favicon.png')}}"/>
    <link rel="mask-icon" href="{{asset('front/safari-pinned-tab.svg')}}" color="#FFF"/>
    <meta name="msapplication-TileColor" content="#FFF"/>
    <meta name="theme-color" content="#FFF"/>

    @foreach (FilamentFabricator::getMeta() as $tag)
        {{ $tag }}
    @endforeach

    {!! seo()->for($page) !!}

    <link rel="stylesheet" href="{{ asset('front/css/fancybox.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}"/>

    @foreach (FilamentFabricator::getStyles() as $name => $path)
        @if (Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <link rel="stylesheet" href="{{ $path }}"/>
        @endif
    @endforeach

    {{ Filament::renderHook('filament-fabricator.head.end') }}
</head>
<body>
{{ Filament::renderHook('filament-fabricator.body.start') }}

@include('front.layout.header')

<main>
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
</main>

<!-- map -->
<div id="map" class="h-500px"></div>
<!-- end #map -->

<x-filament-fabricator::page-blocks :blocks="$page->blocks"/>

{{ Filament::renderHook('filament-fabricator.scripts.start') }}

@foreach (FilamentFabricator::getScripts() as $name => $path)
    @if (Str::of($path)->startsWith('<'))
        {!! $path !!}
    @else
        <script defer src="{{ $path }}"></script>
    @endif
@endforeach

@stack('scripts')

{{ Filament::renderHook('filament-fabricator.scripts.end') }}

{{ Filament::renderHook('filament-fabricator.body.end') }}

</body>
<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": ["MedicalOrganization"],
    "name": "Smile Center Turkey",
    "alternateName": "Smile Center Turkey",
    "description": "Smile Center Turkey is the top satisfaction-rated dental centre and cosmetic surgery clinic in Antalya for implant, dental veneers, and smile makeover",
    "logo": "https://smilecenterturkey.co/files/smile-center-turkey-logo.png",
    "image": "https://smilecenterturkey.co/files/coverwebsite.webp",
    "url": "https://smilecenterturkey.co/",
    "sameAs": [
    "https://www.facebook.com/smilecenterturkey/",
    "https://www.instagram.com/smile_centre_turkey/",
    "https://www.linkedin.com/company/smilecenterturkey/",
    "https://www.youtube.com/@smilecenterturkey",
    "https://www.tiktok.com/@smilecenterturkey"
    ],
    "telephone": "+44 (808) 175 47 46",
    "founder": {
    "@type": "Person",
    "name": "Smile Center Turkey"
    },
    "areaServed": "Turkey",
    "location": {
    "@type": "Place",
    "address": {
    "@type": "PostalAddress",
    "addressRegion":"Antalya",
    "postalCode": "7010",
    "streetAddress": "Barbaros, Mescit Sk. No:19, 07100 Muratpaşa/Antalya"
    }
    }
    }
</script>
<script src="{{asset('front/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/fancybox.umd.js')}}"></script>
<script src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
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
    var popup = new mapboxgl.Popup({offset: 25}).setText("Buraya adres girilecek");

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

</html>

