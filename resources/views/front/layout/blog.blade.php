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

    {!! seo()->for($blog) !!}

    <link rel="stylesheet" href="{{ asset('front/css/fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}" />

</head>
<body>
@include('front.layout.header')

<!-- page -->
<div class="page">
    <div class="bg-primary py-4">
        <div class="container-xxl">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-white mb-lg-4 mb-2">
                    <li class="breadcrumb-item"><a href="/">Smile Center Turkey</a></li>
                    <li class="breadcrumb-item"><a href="/blogs">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                </ol>
            </nav>
            <div class="blod-heading pt-md-3 pb-lg-4">
                <div class="title d-flex gap-3 text-white pb-4 mb-lg-2">
                    <div class="icon mt-3 d-md-block d-none">
                        <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="white" />
                        </svg>
                    </div>
                    <h1 class="fs-48 fw-semibold lh-sm" style="margin-bottom: 0px;">{{ $blog->title }}</h1>
                </div>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-md-3 gap-2">
                    <div class="d-flex align-items-center gap-md-4 gap-md-3 gap-2 flex-wrap">
                        <span class="fs-14 text-gray-600">{{ $blog->category->title }}</span>
                        <span class="fs-14 text-gray-600">{{ $blog->created_at }}</span>
                    </div>
                    <div class="dropdown">
                        <button class="d-flex align-items-center gap-2 fs-15 text-gray-600" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_56_552" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32">
                                    <rect width="32" height="32" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path
                                        d="M24 29.3337C22.8889 29.3337 21.9444 28.9448 21.1667 28.167C20.3889 27.3892 20 26.4448 20 25.3337C20 25.1781 20.0111 25.017 20.0333 24.8503C20.0556 24.6837 20.0889 24.5337 20.1333 24.4003L10.7333 18.9337C10.3556 19.267 9.93333 19.5281 9.46667 19.717C9 19.9059 8.51111 20.0003 8 20.0003C6.88889 20.0003 5.94444 19.6114 5.16667 18.8337C4.38889 18.0559 4 17.1114 4 16.0003C4 14.8892 4.38889 13.9448 5.16667 13.167C5.94444 12.3892 6.88889 12.0003 8 12.0003C8.51111 12.0003 9 12.0948 9.46667 12.2837C9.93333 12.4725 10.3556 12.7337 10.7333 13.067L20.1333 7.60033C20.0889 7.46699 20.0556 7.31699 20.0333 7.15033C20.0111 6.98366 20 6.82255 20 6.66699C20 5.55588 20.3889 4.61144 21.1667 3.83366C21.9444 3.05588 22.8889 2.66699 24 2.66699C25.1111 2.66699 26.0556 3.05588 26.8333 3.83366C27.6111 4.61144 28 5.55588 28 6.66699C28 7.7781 27.6111 8.72255 26.8333 9.50033C26.0556 10.2781 25.1111 10.667 24 10.667C23.4889 10.667 23 10.5725 22.5333 10.3837C22.0667 10.1948 21.6444 9.93366 21.2667 9.60033L11.8667 15.067C11.9111 15.2003 11.9444 15.3503 11.9667 15.517C11.9889 15.6837 12 15.8448 12 16.0003C12 16.1559 11.9889 16.317 11.9667 16.4837C11.9444 16.6503 11.9111 16.8003 11.8667 16.9337L21.2667 22.4003C21.6444 22.067 22.0667 21.8059 22.5333 21.617C23 21.4281 23.4889 21.3337 24 21.3337C25.1111 21.3337 26.0556 21.7225 26.8333 22.5003C27.6111 23.2781 28 24.2225 28 25.3337C28 26.4448 27.6111 27.3892 26.8333 28.167C26.0556 28.9448 25.1111 29.3337 24 29.3337ZM24 8.00033C24.3778 8.00033 24.6944 7.87255 24.95 7.61699C25.2056 7.36144 25.3333 7.04477 25.3333 6.66699C25.3333 6.28921 25.2056 5.97255 24.95 5.71699C24.6944 5.46144 24.3778 5.33366 24 5.33366C23.6222 5.33366 23.3056 5.46144 23.05 5.71699C22.7944 5.97255 22.6667 6.28921 22.6667 6.66699C22.6667 7.04477 22.7944 7.36144 23.05 7.61699C23.3056 7.87255 23.6222 8.00033 24 8.00033ZM8 17.3337C8.37778 17.3337 8.69444 17.2059 8.95 16.9503C9.20556 16.6948 9.33333 16.3781 9.33333 16.0003C9.33333 15.6225 9.20556 15.3059 8.95 15.0503C8.69444 14.7948 8.37778 14.667 8 14.667C7.62222 14.667 7.30556 14.7948 7.05 15.0503C6.79444 15.3059 6.66667 15.6225 6.66667 16.0003C6.66667 16.3781 6.79444 16.6948 7.05 16.9503C7.30556 17.2059 7.62222 17.3337 8 17.3337ZM24 26.667C24.3778 26.667 24.6944 26.5392 24.95 26.2837C25.2056 26.0281 25.3333 25.7114 25.3333 25.3337C25.3333 24.9559 25.2056 24.6392 24.95 24.3837C24.6944 24.1281 24.3778 24.0003 24 24.0003C23.6222 24.0003 23.3056 24.1281 23.05 24.3837C22.7944 24.6392 22.6667 24.9559 22.6667 25.3337C22.6667 25.7114 22.7944 26.0281 23.05 26.2837C23.3056 26.5392 23.6222 26.667 24 26.667Z"
                                        fill="currentColor"
                                    />
                                </g>
                            </svg>
                            Share
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Facebook</a></li>
                            <li><a class="dropdown-item" href="#">X</a></li>
                            <li><a class="dropdown-item" href="#">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-body position-relative pb-lg-5 pb-4 mt-md-0 mt-3">
        <div class="w-100 h-200px bg-primary position-absolute start-0 top-0 z-0 d-md-block d-none"></div>
        <div class="container-xxl position-relative z-1">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($blog->image) }}" class="mobile-img w-100 h-600px object-fit-cover mb-lg-5 mb-4" />
            {!! $blog->content !!}
            <!--
            <div class="pagination py-4 d-flex align-items-center justify-content-center gap-lg-5 gap-4">
                <a href="#" class="fs-18 fw-semibold d-md-flex align-items-center gap-xl-4 gap-3 d-none text-end">
                    <span>Effective Products Against Bad Breath and Their Use</span>
                    <div class="image">
                        <img src="{{asset('front/img/blog/3.png')}}" class="w-90px h-90px object-fit-cover" />
                    </div>
                </a>
                <div class="d-flex align-items-center gap-4">
                    <a href="#">
                        <svg width="53" height="49" viewBox="0 0 53 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.944743 24.8896L24.8896 0.944823L30.4767 6.53195L16.1098 20.8988L52.8252 20.8988L52.8252 28.8805L16.1098 28.8804L30.4767 43.2473L24.8896 48.8345L0.944743 24.8896Z" fill="currentcolor" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="53" height="49" viewBox="0 0 53 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M52.8346 24.8896L28.8897 48.8345L23.3026 43.2473L37.6695 28.8805L0.954101 28.8805L0.9541 20.8988L37.6695 20.8988L23.3026 6.53195L28.8897 0.944823L52.8346 24.8896Z" fill="currentcolor" />
                        </svg>
                    </a>
                </div>
                <a href="#" class="fs-18 fw-semibold d-md-flex align-items-center gap-xl-4 gap-3 d-none">
                    <div class="image">
                        <img src="{{asset('front/img/blog/2.png')}}" class="w-90px h-90px object-fit-cover" />
                    </div>
                    <span>Root Canal Treatment: Objectives and Processes</span>
                </a>
            </div> -->
        </div>
        <!--
            <div class="d-none">
            <div class="pt-lg-5 pt-4 comments position-relative">
                <div class="shape position-absolute start-0 top-0 w-100 mt-n4">
                    <svg width="100%" height="279" viewBox="0 0 1920 279" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1914.4 0C1913.36 1.39378 1912.26 2.82739 1911.22 4.22117C1901.2 17.6413 1891.66 30.3048 1877.3 41.8135C1864.28 52.2071 1844.91 59.2158 1826.09 66.0255C1810.26 71.7599 1795.28 77.1757 1783.61 84.4632C1771.45 92.0693 1765.28 101.467 1759.23 110.547C1747.98 127.511 1738.2 142.126 1692.36 140.015C1617.07 136.471 1553.75 135.794 1481.57 161.599C1467.15 166.736 1452.3 172.311 1437.88 177.687C1406.16 189.554 1373.4 201.82 1340.15 211.775C1300.24 223.722 1266.81 229.616 1234.91 230.452C1198.73 231.368 1164.32 225.633 1130.95 220.058C1085.54 212.452 1038.6 204.607 988.306 214.284C976.511 216.554 964.349 219.859 949.925 224.638C938.13 228.54 926.395 232.961 915.028 237.262C874.936 252.354 837.044 266.611 794.934 261.991C749.036 256.934 722.023 232.324 695.865 208.55C690.854 204.01 685.903 199.47 680.831 195.13C666.957 183.183 647.033 171.674 626.132 163.55C591.784 150.21 559.454 148.139 535.008 157.736C505.183 169.444 503.166 188.24 501.271 206.439C500.171 217.111 499.01 228.142 492.226 237.779C477.925 258.407 434.105 272.823 380.689 274.575C368.894 274.934 356.976 274.655 345.364 273.739C309.855 270.951 274.408 263.863 240.122 256.974C215.37 251.996 189.701 246.859 164.032 243.315C128.279 238.377 92.2208 236.425 56.6512 236.425C29.0267 236.425 1.64665 237.62 -25 239.492V243.474C35.7495 239.253 99.7992 238.496 162.81 247.217C188.234 250.722 213.72 255.859 238.411 260.797C272.941 267.726 308.694 274.894 344.753 277.721C353.309 278.398 361.988 278.756 370.666 278.756C374.15 278.756 377.633 278.717 381.056 278.597C437.649 276.765 482.386 261.752 497.849 239.492C505.061 229.178 506.283 217.788 507.444 206.758C509.339 188.798 511.111 171.833 538.247 161.201C568.438 149.334 604.374 159.767 623.076 167.055C643.305 174.94 662.618 186.05 676.003 197.599C681.014 201.939 685.964 206.439 690.915 210.939C717.745 235.39 745.492 260.637 793.896 265.973C838.144 270.832 878.786 255.54 918.022 240.766C929.329 236.505 941.063 232.124 952.675 228.222C966.732 223.563 978.589 220.337 990.017 218.147C1038.67 208.828 1082.73 216.196 1129.42 223.961C1163.16 229.616 1198 235.43 1235.09 234.474C1267.79 233.638 1301.95 227.585 1342.6 215.439C1376.09 205.404 1409.03 193.099 1440.81 181.192C1455.17 175.816 1470.02 170.241 1484.39 165.103C1555.1 139.816 1617.56 140.493 1691.81 143.998C1742.05 146.387 1753.05 129.741 1764.73 112.14C1770.53 103.419 1776.46 94.4188 1787.71 87.3702C1798.83 80.4013 1813.44 75.1448 1828.9 69.5298C1848.21 62.5609 1868.13 55.3132 1881.89 44.3621C1896.74 32.495 1906.33 19.6324 1916.54 6.01318C1918.01 4.02206 1919.53 2.03094 1921 0.0398224H1914.4V0Z"
                            fill="white"
                            fill-opacity="0.4"
                        ></path>
                    </svg>
                </div>
                <div class="teeth position-absolute end-0 top-0 mt-n4 d-md-block d-none">
                    <img src="{{asset('front/img/teeth.png')}}" class="h-400px" />
                </div>
                <div class="container-xxl">
                    <div class="d-flex align-items-center gap-2 pb-4">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z"
                                    fill="currentcolor"
                                />
                            </svg>
                        </div>
                        <span class="fs-4 fw-semibold">Comment</span>
                    </div>
                    <form action="" class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control h-65px" id="floatingInput" value="Abdullah Okutan" />
                                <label for="floatingInput" class="fs-13">Your Name and Surname*</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control h-200px" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Comment</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5 fw-bold py-3 text-uppercase">Send a comment</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-xxl">
                <hr class="border-gray-700 my-lg-5 my-4" />
                <div class="comment-list">
                    <div class="comment-item">
                        <div class="comment d-flex align-items-center gap-md-4 gap-3">
                            <div class="image flex-shrink-0 w-70px h-70px rounded-circle overflow-hidden border border-2 border-gray-500 bg-white d-flex align-items-center justify-content-center fw-bold">HU</div>
                            <div class="d-flex flex-column gap-1">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="fw-normal fs-15">Hülya Uzungil</span>
                                    <span class="text-gray-700 fs-13">12.06.2023</span>
                                </div>
                                <p class="mb-0 text-primary text-opacity-50">Natural teeth whitening methods offer effective solutions that can be easily applied at home, away from chemical ingredients.</p>
                            </div>
                        </div>
                        <div class="comment-user mt-4 ps-md-5 ps-4 d-flex align-items-center gap-md-4 gap-3">
                            <div class="image flex-shrink-0 w-70px h-70px rounded-circle overflow-hidden bg-white d-flex align-items-center justify-content-center fw-bold">
                                <img src="{{asset('front/img/avatar.png')}}" class="w-100 h-100 object-fit-cover" />
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="fw-normal fs-15">Smile Center Turkey</span>
                                    <span class="text-gray-700 fs-13">12.06.2023</span>
                                </div>
                                <p class="mb-0 text-primary text-opacity-50">Natural teeth whitening methods offer effective solutions that can be easily applied at home, away from chemical ingredients.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-gray-700 my-lg-5 my-4" />
                    <div class="menu-box pb-3">
                        <div class="menu-box-item border-bottom border-white border-opacity-10">
                            <div class="heading bg-white p-4 d-flex align-items-center justify-content-between fw-normal fs-5">
                                What Does Teeth Whitening ( Bleaching ) Mean?
                                <div class="icon">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_56_600" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="44">
                                            <rect x="44" y="44" width="44" height="44" transform="rotate(-180 44 44)" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_56_600)">
                                            <path
                                                d="M23.833 14.6663L20.1663 14.6663L20.1663 22.3663L17.233 19.433L14.6663 21.9997L21.9997 29.333L29.333 21.9997L26.7663 19.433L23.833 22.3663L23.833 14.6663ZM21.9997 3.66634C24.5358 3.66634 26.9191 4.14759 29.1497 5.11009C31.3802 6.07259 33.3205 7.37884 34.9705 9.02884C36.6205 10.6788 37.9268 12.6191 38.8893 14.8497C39.8518 17.0802 40.333 19.4636 40.333 21.9997C40.333 24.5358 39.8518 26.9191 38.8893 29.1497C37.9268 31.3802 36.6205 33.3205 34.9705 34.9705C33.3205 36.6205 31.3802 37.9268 29.1497 38.8893C26.9191 39.8518 24.5358 40.333 21.9997 40.333C19.4636 40.333 17.0802 39.8518 14.8497 38.8893C12.6191 37.9268 10.6788 36.6205 9.02884 34.9705C7.37884 33.3205 6.07259 31.3802 5.11009 29.1497C4.14759 26.9191 3.66634 24.5358 3.66634 21.9997C3.66634 19.4636 4.14759 17.0802 5.11009 14.8497C6.07259 12.6191 7.37884 10.6788 9.02884 9.02884C10.6788 7.37883 12.6191 6.07259 14.8497 5.11009C17.0802 4.14759 19.4636 3.66634 21.9997 3.66634ZM21.9997 7.33301C17.9052 7.33301 14.4372 8.75384 11.5955 11.5955C8.75384 14.4372 7.33301 17.9052 7.33301 21.9997C7.33301 26.0941 8.75384 29.5622 11.5955 32.4038C14.4372 35.2455 17.9052 36.6663 21.9997 36.6663C26.0941 36.6663 29.5622 35.2455 32.4038 32.4038C35.2455 29.5622 36.6663 26.0941 36.6663 21.9997C36.6663 17.9052 35.2455 14.4372 32.4038 11.5955C29.5622 8.75384 26.0941 7.33301 21.9997 7.33301Z"
                                                fill="currentcolor"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-box-item-content" style="display: none">
                                <div class="p-4">
                                    <p class="mb-0">Teeth whitening (bleaching) process is the process of cleaning colored substances that have settled in the invisible porous structure of the enamel layer, the top layer of the tooth, with special content teeth whitening gels.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-box pb-3">
                        <div class="menu-box-item border-bottom border-white border-opacity-10">
                            <div class="heading bg-white p-4 d-flex align-items-center justify-content-between fw-normal fs-5">
                                Does the Teeth Whitening Process Cause Pain in the Teeth?
                                <div class="icon">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_56_600" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="44">
                                            <rect x="44" y="44" width="44" height="44" transform="rotate(-180 44 44)" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_56_600)">
                                            <path
                                                d="M23.833 14.6663L20.1663 14.6663L20.1663 22.3663L17.233 19.433L14.6663 21.9997L21.9997 29.333L29.333 21.9997L26.7663 19.433L23.833 22.3663L23.833 14.6663ZM21.9997 3.66634C24.5358 3.66634 26.9191 4.14759 29.1497 5.11009C31.3802 6.07259 33.3205 7.37884 34.9705 9.02884C36.6205 10.6788 37.9268 12.6191 38.8893 14.8497C39.8518 17.0802 40.333 19.4636 40.333 21.9997C40.333 24.5358 39.8518 26.9191 38.8893 29.1497C37.9268 31.3802 36.6205 33.3205 34.9705 34.9705C33.3205 36.6205 31.3802 37.9268 29.1497 38.8893C26.9191 39.8518 24.5358 40.333 21.9997 40.333C19.4636 40.333 17.0802 39.8518 14.8497 38.8893C12.6191 37.9268 10.6788 36.6205 9.02884 34.9705C7.37884 33.3205 6.07259 31.3802 5.11009 29.1497C4.14759 26.9191 3.66634 24.5358 3.66634 21.9997C3.66634 19.4636 4.14759 17.0802 5.11009 14.8497C6.07259 12.6191 7.37884 10.6788 9.02884 9.02884C10.6788 7.37883 12.6191 6.07259 14.8497 5.11009C17.0802 4.14759 19.4636 3.66634 21.9997 3.66634ZM21.9997 7.33301C17.9052 7.33301 14.4372 8.75384 11.5955 11.5955C8.75384 14.4372 7.33301 17.9052 7.33301 21.9997C7.33301 26.0941 8.75384 29.5622 11.5955 32.4038C14.4372 35.2455 17.9052 36.6663 21.9997 36.6663C26.0941 36.6663 29.5622 35.2455 32.4038 32.4038C35.2455 29.5622 36.6663 26.0941 36.6663 21.9997C36.6663 17.9052 35.2455 14.4372 32.4038 11.5955C29.5622 8.75384 26.0941 7.33301 21.9997 7.33301Z"
                                                fill="currentcolor"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-box-item-content" style="display: none">
                                <div class="p-4">
                                    <p class="mb-0">Teeth whitening (bleaching) process is the process of cleaning colored substances that have settled in the invisible porous structure of the enamel layer, the top layer of the tooth, with special content teeth whitening gels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-box pb-3">
                        <div class="menu-box-item border-bottom border-white border-opacity-10">
                            <div class="heading bg-white p-4 d-flex align-items-center justify-content-between fw-normal fs-5">
                                What Does Teeth Whitening ( Bleaching ) Mean?
                                <div class="icon">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_56_600" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="44">
                                            <rect x="44" y="44" width="44" height="44" transform="rotate(-180 44 44)" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_56_600)">
                                            <path
                                                d="M23.833 14.6663L20.1663 14.6663L20.1663 22.3663L17.233 19.433L14.6663 21.9997L21.9997 29.333L29.333 21.9997L26.7663 19.433L23.833 22.3663L23.833 14.6663ZM21.9997 3.66634C24.5358 3.66634 26.9191 4.14759 29.1497 5.11009C31.3802 6.07259 33.3205 7.37884 34.9705 9.02884C36.6205 10.6788 37.9268 12.6191 38.8893 14.8497C39.8518 17.0802 40.333 19.4636 40.333 21.9997C40.333 24.5358 39.8518 26.9191 38.8893 29.1497C37.9268 31.3802 36.6205 33.3205 34.9705 34.9705C33.3205 36.6205 31.3802 37.9268 29.1497 38.8893C26.9191 39.8518 24.5358 40.333 21.9997 40.333C19.4636 40.333 17.0802 39.8518 14.8497 38.8893C12.6191 37.9268 10.6788 36.6205 9.02884 34.9705C7.37884 33.3205 6.07259 31.3802 5.11009 29.1497C4.14759 26.9191 3.66634 24.5358 3.66634 21.9997C3.66634 19.4636 4.14759 17.0802 5.11009 14.8497C6.07259 12.6191 7.37884 10.6788 9.02884 9.02884C10.6788 7.37883 12.6191 6.07259 14.8497 5.11009C17.0802 4.14759 19.4636 3.66634 21.9997 3.66634ZM21.9997 7.33301C17.9052 7.33301 14.4372 8.75384 11.5955 11.5955C8.75384 14.4372 7.33301 17.9052 7.33301 21.9997C7.33301 26.0941 8.75384 29.5622 11.5955 32.4038C14.4372 35.2455 17.9052 36.6663 21.9997 36.6663C26.0941 36.6663 29.5622 35.2455 32.4038 32.4038C35.2455 29.5622 36.6663 26.0941 36.6663 21.9997C36.6663 17.9052 35.2455 14.4372 32.4038 11.5955C29.5622 8.75384 26.0941 7.33301 21.9997 7.33301Z"
                                                fill="currentcolor"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="menu-box-item-content" style="display: none">
                                <div class="p-4">
                                    <p class="mb-0">Teeth whitening (bleaching) process is the process of cleaning colored substances that have settled in the invisible porous structure of the enamel layer, the top layer of the tooth, with special content teeth whitening gels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
</div>
<!-- end #page -->

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

