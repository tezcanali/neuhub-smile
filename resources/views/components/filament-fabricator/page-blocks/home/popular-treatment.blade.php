@aware(['page'])
<section class="py-lg-5 py-4 position-relative z-3">
    <div class="shape position-absolute start-0 end-0 top-50 translate-middle-y">
        <svg width="100%" height="279" viewBox="0 0 1920 279" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1927.4 0.137695C1926.36 1.53148 1925.26 2.96508 1924.22 4.35886C1914.2 17.779 1904.66 30.4425 1890.3 41.9512C1877.28 52.3448 1857.91 59.3535 1839.09 66.1632C1823.26 71.8976 1808.28 77.3134 1796.61 84.6009C1784.45 92.207 1778.28 101.605 1772.23 110.685C1760.98 127.649 1751.2 142.264 1705.36 140.153C1630.07 136.609 1566.75 135.932 1494.57 161.737C1480.15 166.874 1465.3 172.449 1450.88 177.825C1419.16 189.692 1386.4 201.957 1353.15 211.913C1313.24 223.86 1279.81 229.753 1247.91 230.59C1211.73 231.506 1177.32 225.771 1143.95 220.196C1098.54 212.59 1051.6 204.745 1001.31 214.422C989.511 216.692 977.349 219.997 962.925 224.776C951.13 228.678 939.395 233.098 928.028 237.399C887.936 252.492 850.044 266.748 807.934 262.129C762.036 257.072 735.023 232.461 708.865 208.687C703.854 204.148 698.903 199.608 693.831 195.267C679.957 183.321 660.033 171.812 639.132 163.688C604.784 150.348 572.454 148.277 548.008 157.874C518.183 169.582 516.166 188.378 514.271 206.577C513.171 217.249 512.01 228.28 505.226 237.917C490.925 258.545 447.105 272.961 393.689 274.713C381.894 275.071 369.976 274.792 358.364 273.877C322.855 271.089 287.408 264.001 253.122 257.111C228.37 252.134 202.701 246.996 177.032 243.452C141.279 238.514 105.221 236.563 69.6512 236.563C42.0267 236.563 14.6467 237.758 -12 239.629V243.612C48.7495 239.39 112.799 238.634 175.81 247.355C201.234 250.859 226.72 255.996 251.411 260.934C285.941 267.863 321.694 275.031 357.753 277.859C366.309 278.536 374.988 278.894 383.666 278.894C387.15 278.894 390.633 278.854 394.056 278.735C450.649 276.903 495.386 261.89 510.849 239.629C518.061 229.315 519.283 217.926 520.444 206.895C522.339 188.935 524.111 171.971 551.247 161.339C581.438 149.472 617.374 159.905 636.076 167.192C656.305 175.077 675.618 186.188 689.003 197.736C694.014 202.077 698.964 206.577 703.915 211.077C730.745 235.528 758.492 260.775 806.896 266.111C851.144 270.97 891.786 255.678 931.022 240.904C942.329 236.643 954.063 232.262 965.675 228.36C979.732 223.7 991.589 220.475 1003.02 218.285C1051.67 208.966 1095.73 216.333 1142.42 224.099C1176.16 229.753 1211 235.567 1248.09 234.612C1280.79 233.775 1314.95 227.722 1355.6 215.577C1389.09 205.541 1422.03 193.236 1453.81 181.329C1468.17 175.953 1483.02 170.378 1497.39 165.241C1568.1 139.954 1630.56 140.631 1704.81 144.135C1755.05 146.525 1766.05 129.879 1777.73 112.277C1783.53 103.556 1789.46 94.5565 1800.71 87.5079C1811.83 80.539 1826.44 75.2825 1841.9 69.6675C1861.21 62.6986 1881.13 55.4509 1894.89 44.4998C1909.74 32.6327 1919.33 19.7701 1929.54 6.15087C1931.01 4.15975 1932.53 2.16864 1934 0.177518H1927.4V0.137695Z"
                fill="white"
            />
        </svg>
    </div>
    <div class="container-custom position-relative z-2">
        <div class="row g-4 w-100 m-0">
            <div class="col-lg-5 d-lg-block d-none">
                <div class="mb-1">
                    <div class="fs-18 fw-normal">{{ $title }}</div>
                    <div class="fw-lighter fs-4">{{ $subtitle }}</div>
                </div>
                <div class="image position-relative">

                    <img src="{{asset('front/img/girl.webp')}}" class="img-fluid" alt="Smile Center Turkey"/>
                    <a href="/dental-implants-turkey" class="d-flex align-items-center gap-2 fs-13 mt-n5">
                        <i class="fa fa-arrow-right"></i>
                        <span class="text-decoration-underline">All Treatments *</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="popular-list swiper">
                    <div
                        class="gradient position-absolute end-0 top-0 bottom-0 h-100 w-200px z-3 d-lg-block d-none"></div>
                    <div class="mb-4 text-white d-lg-none d-block">
                        <div class="fs-18 fw-normal">{{ $title }}</div>
                        <div class="fw-lighter fs-4">{{ $subtitle }}</div>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach($treatments as $treatment)
                            <div class="swiper-slide w-auto">
                                <a href="{{ $treatment['link'] }}" class="d-block w-400px bg-white rounded-3 p-3">
                                    <div class="image mb-3">
                                        <img src="{{ asset(Storage::url($treatment['image'])) }}" class="w-100 h-300px object-fit-cover rounded-1" alt="Smile Center Turkey"/>
                                    </div>
                                    <div class="fs-5 fw-normal pb-2">{{ $treatment['title'] }}</div>
                                    <p class="fs-12">{{ $treatment['description'] }}</p>
                                    <span class="d-flex align-items-center fs-13 gap-2 pb-2">
                                        <i class="fa fa-arrow-right"></i>
                                        View More *
                                    </span>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <a href="/all-on-4-dental-implants-turkey"
                       class="d-lg-none d-flex align-items-center gap-2 fs-14 mt-4">
                        <i class="fa fa-arrow-right"></i>
                        <span class="text-decoration-underline">All Treatments *</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
