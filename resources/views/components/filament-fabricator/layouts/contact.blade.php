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

<!-- page -->
<div class="page bg-primary pt-4">
    <div class="container-xxl">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white mb-lg-4 mb-2">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </nav>
        <div class="page-title d-flex align-items-center gap-md-4 gap-3 pt-lg-3 pt-2">
            <div class="icon text-white">
                <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentColor" />
                </svg>
            </div>
            <span class="fs-54 fw-semibold text-white">Contact us</span>
        </div>
        <div class="address-list py-lg-5 py-4 mt-lg-4 border-bottom border-white border-opacity-10">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex gap-4">
                        <div class="icon text-gray-600">
                            <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_56_701" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                                    <rect width="35.5244" height="35.5244" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_56_701)">
                                    <path
                                        d="M17.7624 17.7618C18.5765 17.7618 19.2734 17.4719 19.8531 16.8922C20.4329 16.3125 20.7227 15.6155 20.7227 14.8014C20.7227 13.9873 20.4329 13.2904 19.8531 12.7107C19.2734 12.1309 18.5765 11.8411 17.7624 11.8411C16.9483 11.8411 16.2513 12.1309 15.6716 12.7107C15.0919 13.2904 14.802 13.9873 14.802 14.8014C14.802 15.6155 15.0919 16.3125 15.6716 16.8922C16.2513 17.4719 16.9483 17.7618 17.7624 17.7618ZM17.7624 28.6412C20.7721 25.8781 23.0047 23.368 24.4602 21.1107C25.9157 18.8534 26.6435 16.849 26.6435 15.0975C26.6435 12.4085 25.7862 10.2067 24.0717 8.49215C22.3571 6.7776 20.254 5.92033 17.7624 5.92033C15.2707 5.92033 13.1676 6.7776 11.4531 8.49215C9.73854 10.2067 8.88127 12.4085 8.88127 15.0975C8.88127 16.849 9.60902 18.8534 11.0645 21.1107C12.5201 23.368 14.7527 25.8781 17.7624 28.6412ZM17.7624 32.5636C13.7905 29.1839 10.824 26.0447 8.86276 23.146C6.90152 20.2473 5.9209 17.5644 5.9209 15.0975C5.9209 11.397 7.11121 8.44898 9.49184 6.25337C11.8725 4.05776 14.6293 2.95996 17.7624 2.95996C20.8954 2.95996 23.6523 4.05776 26.0329 6.25337C28.4135 8.44898 29.6038 11.397 29.6038 15.0975C29.6038 17.5644 28.6232 20.2473 26.662 23.146C24.7007 26.0447 21.7342 29.1839 17.7624 32.5636Z"
                                        fill="currentColor"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            <span class="text-gray-600 fw-lighter ls-1">Head Office</span>
                            <div class="text-white text-balance">Sinan Mah. 1254 Sok. No:1/502 Muratpasa/Antalya/TURKEY</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex gap-4">
                        <div class="icon text-gray-600">
                            <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_56_701" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                                    <rect width="35.5244" height="35.5244" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_56_701)">
                                    <path
                                        d="M17.7624 17.7618C18.5765 17.7618 19.2734 17.4719 19.8531 16.8922C20.4329 16.3125 20.7227 15.6155 20.7227 14.8014C20.7227 13.9873 20.4329 13.2904 19.8531 12.7107C19.2734 12.1309 18.5765 11.8411 17.7624 11.8411C16.9483 11.8411 16.2513 12.1309 15.6716 12.7107C15.0919 13.2904 14.802 13.9873 14.802 14.8014C14.802 15.6155 15.0919 16.3125 15.6716 16.8922C16.2513 17.4719 16.9483 17.7618 17.7624 17.7618ZM17.7624 28.6412C20.7721 25.8781 23.0047 23.368 24.4602 21.1107C25.9157 18.8534 26.6435 16.849 26.6435 15.0975C26.6435 12.4085 25.7862 10.2067 24.0717 8.49215C22.3571 6.7776 20.254 5.92033 17.7624 5.92033C15.2707 5.92033 13.1676 6.7776 11.4531 8.49215C9.73854 10.2067 8.88127 12.4085 8.88127 15.0975C8.88127 16.849 9.60902 18.8534 11.0645 21.1107C12.5201 23.368 14.7527 25.8781 17.7624 28.6412ZM17.7624 32.5636C13.7905 29.1839 10.824 26.0447 8.86276 23.146C6.90152 20.2473 5.9209 17.5644 5.9209 15.0975C5.9209 11.397 7.11121 8.44898 9.49184 6.25337C11.8725 4.05776 14.6293 2.95996 17.7624 2.95996C20.8954 2.95996 23.6523 4.05776 26.0329 6.25337C28.4135 8.44898 29.6038 11.397 29.6038 15.0975C29.6038 17.5644 28.6232 20.2473 26.662 23.146C24.7007 26.0447 21.7342 29.1839 17.7624 32.5636Z"
                                        fill="currentColor"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            <span class="text-gray-600 fw-lighter ls-1">Clinic</span>
                            <div class="text-white text-balance">Barbaros Mah. Mescid Sok. Muratpasa/Antalya/TURKEY</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex gap-4">
                        <div class="icon text-gray-600">
                            <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_56_701" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                                    <rect width="35.5244" height="35.5244" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_56_701)">
                                    <path
                                        d="M17.7624 17.7618C18.5765 17.7618 19.2734 17.4719 19.8531 16.8922C20.4329 16.3125 20.7227 15.6155 20.7227 14.8014C20.7227 13.9873 20.4329 13.2904 19.8531 12.7107C19.2734 12.1309 18.5765 11.8411 17.7624 11.8411C16.9483 11.8411 16.2513 12.1309 15.6716 12.7107C15.0919 13.2904 14.802 13.9873 14.802 14.8014C14.802 15.6155 15.0919 16.3125 15.6716 16.8922C16.2513 17.4719 16.9483 17.7618 17.7624 17.7618ZM17.7624 28.6412C20.7721 25.8781 23.0047 23.368 24.4602 21.1107C25.9157 18.8534 26.6435 16.849 26.6435 15.0975C26.6435 12.4085 25.7862 10.2067 24.0717 8.49215C22.3571 6.7776 20.254 5.92033 17.7624 5.92033C15.2707 5.92033 13.1676 6.7776 11.4531 8.49215C9.73854 10.2067 8.88127 12.4085 8.88127 15.0975C8.88127 16.849 9.60902 18.8534 11.0645 21.1107C12.5201 23.368 14.7527 25.8781 17.7624 28.6412ZM17.7624 32.5636C13.7905 29.1839 10.824 26.0447 8.86276 23.146C6.90152 20.2473 5.9209 17.5644 5.9209 15.0975C5.9209 11.397 7.11121 8.44898 9.49184 6.25337C11.8725 4.05776 14.6293 2.95996 17.7624 2.95996C20.8954 2.95996 23.6523 4.05776 26.0329 6.25337C28.4135 8.44898 29.6038 11.397 29.6038 15.0975C29.6038 17.5644 28.6232 20.2473 26.662 23.146C24.7007 26.0447 21.7342 29.1839 17.7624 32.5636Z"
                                        fill="currentColor"
                                    />
                                </g>
                            </svg>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            <span class="text-gray-600 fw-lighter ls-1">London Office</span>
                            <div class="text-white text-balance">71-75 Shelton Street, Covent Garden, London, WC2H 9JQKEY</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-lg-4 gap-3 flex-wrap py-lg-5 py-4">
            <a href="#" class="d-flex align-items-center gap-3 text-white">
                <div class="icon text-gray-600">
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_56_711" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="31">
                            <rect y="0.505859" width="30" height="30" fill="#D9D9D9" />
                        </mask>
                        <g mask="url(#mask0_56_711)">
                            <path
                                d="M24.9375 26.7559C22.3333 26.7559 19.7604 26.1882 17.2188 25.0527C14.6771 23.9173 12.3646 22.3079 10.2812 20.2246C8.19792 18.1413 6.58854 15.8288 5.45313 13.2871C4.31771 10.7454 3.75 8.17253 3.75 5.56836C3.75 5.19336 3.875 4.88086 4.125 4.63086C4.375 4.38086 4.6875 4.25586 5.0625 4.25586H10.125C10.4167 4.25586 10.6771 4.35482 10.9062 4.55273C11.1354 4.75065 11.2708 4.98503 11.3125 5.25586L12.125 9.63086C12.1667 9.96419 12.1562 10.2454 12.0938 10.4746C12.0312 10.7038 11.9167 10.9017 11.75 11.0684L8.71875 14.1309C9.13542 14.9017 9.63021 15.6465 10.2031 16.3652C10.776 17.084 11.4062 17.7767 12.0938 18.4434C12.7396 19.0892 13.4167 19.6882 14.125 20.2402C14.8333 20.7923 15.5833 21.2975 16.375 21.7559L19.3125 18.8184C19.5 18.6309 19.7448 18.4902 20.0469 18.3965C20.349 18.3027 20.6458 18.2767 20.9375 18.3184L25.25 19.1934C25.5417 19.2767 25.7812 19.4277 25.9688 19.6465C26.1562 19.8652 26.25 20.11 26.25 20.3809V25.4434C26.25 25.8184 26.125 26.1309 25.875 26.3809C25.625 26.6309 25.3125 26.7559 24.9375 26.7559ZM7.53125 11.7559L9.59375 9.69336L9.0625 6.75586H6.28125C6.38542 7.61003 6.53125 8.45378 6.71875 9.28711C6.90625 10.1204 7.17708 10.9434 7.53125 11.7559ZM18.7188 22.9434C19.5313 23.2975 20.3594 23.5788 21.2031 23.7871C22.0469 23.9954 22.8958 24.1309 23.75 24.1934V21.4434L20.8125 20.8496L18.7188 22.9434Z"
                                fill="currentColor"
                            />
                        </g>
                    </svg>
                </div>
                <div><a href="tel:+448081754746" class="text-white"><span class="fw-normal">+44 (808) 175 47 46</span> - TOLL FREE LINE</a></div>
            </a>
            <a href="#" class="d-flex align-items-center gap-3 text-white">
                <div class="icon text-gray-600">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M33 16.0755C33 24.9531 25.7473 32.1499 16.7986 32.1499C13.9588 32.1499 11.2913 31.4236 8.96909 30.1516L0 33L2.9237 24.3731C1.44947 21.9519 0.60045 19.1089 0.60045 16.0744C0.601526 7.19679 7.85212 0 16.8008 0C25.7483 0.00215215 33 7.19787 33 16.0755ZM16.7975 2.56321C9.28761 2.56321 3.17873 8.62582 3.17873 16.0787C3.17873 19.0358 4.14289 21.7733 5.77314 24.0008L4.07295 29.0185L9.30482 27.356C11.457 28.7678 14.032 29.5899 16.7975 29.5899C24.3075 29.5899 30.4185 23.5284 30.4185 16.0755C30.4206 8.62582 24.3085 2.56321 16.7975 2.56321ZM24.98 19.7783C24.8789 19.6158 24.6141 19.5168 24.2182 19.3188C23.8232 19.1208 21.868 18.1685 21.5054 18.0393C21.1395 17.907 20.8748 17.8403 20.6101 18.2352C20.3486 18.6301 19.5867 19.5168 19.3532 19.7815C19.1219 20.0451 18.8905 20.0785 18.4934 19.8837C18.0964 19.6836 16.8158 19.2704 15.2986 17.9285C14.1181 16.8825 13.3207 15.5945 13.0905 15.1996C12.8569 14.8057 13.0668 14.5927 13.2637 14.3968C13.4413 14.2193 13.6608 13.9363 13.8598 13.7049C14.0589 13.4757 14.1246 13.3132 14.2569 13.0496C14.3871 12.7859 14.3215 12.5567 14.2236 12.3576C14.1246 12.1597 13.3315 10.2227 12.999 9.43395C12.6686 8.64627 12.3383 8.77647 12.1058 8.77647C11.8745 8.77647 11.6098 8.74419 11.3451 8.74419C11.0803 8.74419 10.6499 8.83996 10.2873 9.23488C9.92464 9.6298 8.89807 10.5821 8.89807 12.5212C8.89807 14.4625 10.3196 16.3337 10.5186 16.5963C10.7188 16.8578 13.2669 20.9673 17.3033 22.5449C21.3418 24.1213 21.3418 23.5951 22.0692 23.5284C22.7988 23.4617 24.4194 22.5761 24.7487 21.6571C25.0801 20.7338 25.0801 19.9429 24.98 19.7783Z"
                            fill="#70FF59"
                        />
                    </svg>
                </div>
                <div><a href="https://wa.me/+905451294746" class="text-white"><span class="fw-normal">+90 (545) 129 47 46</span> - <span style="color: #70ff59">WHATSAPP LINE</span></a></div>
            </a>
            <a href="#" class="d-flex align-items-center gap-3 text-white">
                <div class="icon text-gray-600">
                    <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_56_718" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="37">
                            <rect y="0.677246" width="36" height="36" fill="#D9D9D9" />
                        </mask>
                        <g mask="url(#mask0_56_718)">
                            <path
                                d="M18 33.6772C15.925 33.6772 13.975 33.2835 12.15 32.496C10.325 31.7085 8.7375 30.6397 7.3875 29.2897C6.0375 27.9397 4.96875 26.3522 4.18125 24.5272C3.39375 22.7022 3 20.7522 3 18.6772C3 16.6022 3.39375 14.6522 4.18125 12.8272C4.96875 11.0022 6.0375 9.41475 7.3875 8.06475C8.7375 6.71475 10.325 5.646 12.15 4.8585C13.975 4.071 15.925 3.67725 18 3.67725C20.075 3.67725 22.025 4.071 23.85 4.8585C25.675 5.646 27.2625 6.71475 28.6125 8.06475C29.9625 9.41475 31.0312 11.0022 31.8187 12.8272C32.6062 14.6522 33 16.6022 33 18.6772V20.8522C33 22.3272 32.4938 23.5835 31.4813 24.621C30.4688 25.6585 29.225 26.1772 27.75 26.1772C26.875 26.1772 26.05 25.9897 25.275 25.6147C24.5 25.2397 23.85 24.7022 23.325 24.0022C22.6 24.7272 21.7812 25.271 20.8688 25.6335C19.9563 25.996 19 26.1772 18 26.1772C15.925 26.1772 14.1562 25.446 12.6938 23.9835C11.2312 22.521 10.5 20.7522 10.5 18.6772C10.5 16.6022 11.2312 14.8335 12.6938 13.371C14.1562 11.9085 15.925 11.1772 18 11.1772C20.075 11.1772 21.8438 11.9085 23.3063 13.371C24.7688 14.8335 25.5 16.6022 25.5 18.6772V20.8522C25.5 21.5022 25.7125 22.0522 26.1375 22.5022C26.5625 22.9522 27.1 23.1772 27.75 23.1772C28.4 23.1772 28.9375 22.9522 29.3625 22.5022C29.7875 22.0522 30 21.5022 30 20.8522V18.6772C30 15.3272 28.8375 12.4897 26.5125 10.1647C24.1875 7.83975 21.35 6.67725 18 6.67725C14.65 6.67725 11.8125 7.83975 9.4875 10.1647C7.1625 12.4897 6 15.3272 6 18.6772C6 22.0272 7.1625 24.8647 9.4875 27.1897C11.8125 29.5147 14.65 30.6772 18 30.6772H25.5V33.6772H18ZM18 23.1772C19.25 23.1772 20.3125 22.7397 21.1875 21.8647C22.0625 20.9897 22.5 19.9272 22.5 18.6772C22.5 17.4272 22.0625 16.3647 21.1875 15.4897C20.3125 14.6147 19.25 14.1772 18 14.1772C16.75 14.1772 15.6875 14.6147 14.8125 15.4897C13.9375 16.3647 13.5 17.4272 13.5 18.6772C13.5 19.9272 13.9375 20.9897 14.8125 21.8647C15.6875 22.7397 16.75 23.1772 18 23.1772Z"
                                fill="currentColor"
                            />
                        </g>
                    </svg>
                </div>
                <div><span class="fw-normal">smile@smilecenterturkey.co</span></div>
            </a>
        </div>
    </div>
    <div class="position-relative py-lg-5 py-4">
        <div class="shape position-absolute start-0 top-0 w-100 mt-n4">
            <svg width="100%" height="279" viewBox="0 0 1920 279" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1914.4 0C1913.36 1.39378 1912.26 2.82739 1911.22 4.22117C1901.2 17.6413 1891.66 30.3048 1877.3 41.8135C1864.28 52.2071 1844.91 59.2158 1826.09 66.0255C1810.26 71.7599 1795.28 77.1757 1783.61 84.4632C1771.45 92.0693 1765.28 101.467 1759.23 110.547C1747.98 127.511 1738.2 142.126 1692.36 140.015C1617.07 136.471 1553.75 135.794 1481.57 161.599C1467.15 166.736 1452.3 172.311 1437.88 177.687C1406.16 189.554 1373.4 201.82 1340.15 211.775C1300.24 223.722 1266.81 229.616 1234.91 230.452C1198.73 231.368 1164.32 225.633 1130.95 220.058C1085.54 212.452 1038.6 204.607 988.306 214.284C976.511 216.554 964.349 219.859 949.925 224.638C938.13 228.54 926.395 232.961 915.028 237.262C874.936 252.354 837.044 266.611 794.934 261.991C749.036 256.934 722.023 232.324 695.865 208.55C690.854 204.01 685.903 199.47 680.831 195.13C666.957 183.183 647.033 171.674 626.132 163.55C591.784 150.21 559.454 148.139 535.008 157.736C505.183 169.444 503.166 188.24 501.271 206.439C500.171 217.111 499.01 228.142 492.226 237.779C477.925 258.407 434.105 272.823 380.689 274.575C368.894 274.934 356.976 274.655 345.364 273.739C309.855 270.951 274.408 263.863 240.122 256.974C215.37 251.996 189.701 246.859 164.032 243.315C128.279 238.377 92.2208 236.425 56.6512 236.425C29.0267 236.425 1.64665 237.62 -25 239.492V243.474C35.7495 239.253 99.7992 238.496 162.81 247.217C188.234 250.722 213.72 255.859 238.411 260.797C272.941 267.726 308.694 274.894 344.753 277.721C353.309 278.398 361.988 278.756 370.666 278.756C374.15 278.756 377.633 278.717 381.056 278.597C437.649 276.765 482.386 261.752 497.849 239.492C505.061 229.178 506.283 217.788 507.444 206.758C509.339 188.798 511.111 171.833 538.247 161.201C568.438 149.334 604.374 159.767 623.076 167.055C643.305 174.94 662.618 186.05 676.003 197.599C681.014 201.939 685.964 206.439 690.915 210.939C717.745 235.39 745.492 260.637 793.896 265.973C838.144 270.832 878.786 255.54 918.022 240.766C929.329 236.505 941.063 232.124 952.675 228.222C966.732 223.563 978.589 220.337 990.017 218.147C1038.67 208.828 1082.73 216.196 1129.42 223.961C1163.16 229.616 1198 235.43 1235.09 234.474C1267.79 233.638 1301.95 227.585 1342.6 215.439C1376.09 205.404 1409.03 193.099 1440.81 181.192C1455.17 175.816 1470.02 170.241 1484.39 165.103C1555.1 139.816 1617.56 140.493 1691.81 143.998C1742.05 146.387 1753.05 129.741 1764.73 112.14C1770.53 103.419 1776.46 94.4188 1787.71 87.3702C1798.83 80.4013 1813.44 75.1448 1828.9 69.5298C1848.21 62.5609 1868.13 55.3132 1881.89 44.3621C1896.74 32.495 1906.33 19.6324 1916.54 6.01318C1918.01 4.02206 1919.53 2.03094 1921 0.0398224H1914.4V0Z"
                    fill="white"
                    fill-opacity="0.4"
                />
            </svg>
        </div>
        <div class="teeth position-absolute end-0 top-0 mt-n4 d-md-block d-none">
            <img src="{{asset('front/img/teeth.png')}}" class="h-400px" />
        </div>
        <div class="container-xxl">
            <div class="d-flex align-items-center gap-3 text-gray-600 mb-lg-5 mb-4">
                <div class="icon">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentColor" />
                    </svg>
                </div>
                <span>You can fill out the form for any questions and requests about our services.</span>
            </div>
            <!-- <form action="" class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control h-65px" id="floatingInput" value="Abdullah Okutan" />
                        <label for="floatingInput" class="fs-13">Your Name and Surname*</label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control h-65px" id="floatingInput" />
                        <label for="floatingInput" class="fs-13">Phone ( Required )*</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="email" class="form-control h-65px" id="floatingInput" />
                        <label for="floatingInput" class="fs-13">E-Mail Address*</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control h-200px" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Your Message</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-gray-600 px-5 fw-bold py-3">SEND</button>
                </div>
            </form>-->
        </div>
    </div>
</div>
<!-- end #page -->

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

