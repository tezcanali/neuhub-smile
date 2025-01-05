@props(['page'])
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

</body>
<script type="application/ld+json">
    {"@context": "https://schema.org/",
    "@type": "Product",
    "name": "Smile Center",
    "description": "Medical Travel and Tourism",
    "image": "https://smilecenterturkey.co/files/smile-center-turkey-logo.png",
    "aggregateRating": {"@type": "AggregateRating",
    "reviewCount": 234,
    "ratingValue": 4.90,
    "bestRating": 5,
    "worstRating": 1}}
</script>

<script src="{{asset('front/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/fancybox.umd.js')}}"></script>
<script src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
</html>

