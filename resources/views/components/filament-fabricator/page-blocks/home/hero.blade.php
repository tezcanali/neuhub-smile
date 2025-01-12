@aware(['page'])
<div class="hero bg-primary position-relative overflow-hidden">
    <div class="hero-list swiper h-100">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="shape position-absolute start-0 end-0 top-50 translate-middle-y z-1 mt-n5">
                    <svg width="100%" height="276" viewBox="0 0 1920 276" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1913.49 0C1912.46 1.37516 1911.38 2.78961 1910.35 4.16477C1900.46 17.4056 1891.06 29.8999 1876.89 41.2548C1864.04 51.5096 1844.93 58.4247 1826.35 65.1433C1810.74 70.8011 1795.96 76.1446 1784.45 83.3347C1772.45 90.8392 1766.36 100.112 1760.39 109.07C1749.29 125.808 1739.64 140.227 1694.42 138.145C1620.13 134.648 1557.66 133.98 1486.45 159.44C1472.21 164.508 1457.56 170.009 1443.33 175.313C1412.04 187.022 1379.72 199.123 1346.91 208.946C1307.54 220.733 1274.55 226.548 1243.08 227.373C1207.38 228.277 1173.43 222.619 1140.51 217.118C1095.7 209.614 1049.39 201.874 999.767 211.421C988.13 213.661 976.13 216.922 961.899 221.637C950.262 225.487 938.684 229.848 927.468 234.092C887.912 248.983 850.526 263.049 808.979 258.491C763.695 253.501 737.042 229.22 711.234 205.763C706.289 201.284 701.405 196.805 696.4 192.522C682.712 180.735 663.055 169.38 642.432 161.365C608.544 148.203 576.645 146.16 552.525 155.629C523.099 167.18 521.109 185.725 519.24 203.681C518.155 214.211 517.009 225.094 510.316 234.602C496.206 254.955 452.971 269.178 400.269 270.907C388.631 271.26 376.873 270.985 365.416 270.081C330.382 267.331 295.408 260.337 261.58 253.54C237.158 248.629 211.833 243.561 186.507 240.064C151.231 235.192 115.655 233.266 80.5603 233.266C53.3049 233.266 26.2906 234.445 0 236.292V240.221C59.9378 236.056 123.132 235.31 185.301 243.914C210.385 247.372 235.53 252.44 259.891 257.312C293.961 264.149 329.236 271.221 364.813 274.011C373.255 274.678 381.817 275.032 390.38 275.032C393.817 275.032 397.254 274.993 400.631 274.875C456.468 273.068 500.607 258.255 515.863 236.292C522.979 226.116 524.185 214.879 525.33 203.995C527.2 186.275 528.948 169.538 555.721 159.047C585.509 147.339 620.965 157.633 639.417 164.823C659.376 172.602 678.431 183.564 691.637 194.958C696.581 199.241 701.465 203.681 706.35 208.121C732.821 232.245 760.197 257.155 807.954 262.42C851.611 267.213 891.711 252.126 930.423 237.549C941.578 233.345 953.156 229.023 964.613 225.173C978.482 220.576 990.18 217.393 1001.46 215.232C1049.45 206.038 1092.93 213.307 1139 220.969C1172.28 226.548 1206.66 232.284 1243.26 231.341C1275.52 230.516 1309.23 224.544 1349.32 212.561C1382.37 202.659 1414.87 190.519 1446.23 178.771C1460.4 173.467 1475.05 167.966 1489.22 162.898C1558.99 137.948 1620.61 138.616 1693.88 142.074C1743.44 144.431 1754.3 128.008 1765.81 110.641C1771.54 102.037 1777.39 93.1573 1788.49 86.2029C1799.46 79.3271 1813.87 74.1408 1829.13 68.6009C1848.18 61.7251 1867.84 54.5742 1881.41 43.7694C1896.06 32.0609 1905.53 19.3701 1915.6 5.93283C1917.05 3.96832 1918.55 2.00381 1920 0.0392903H1913.49V0Z"
                            fill="#25B3E8"
                        />
                    </svg>
                </div>
                <img src="{{asset('front/img/ht1.png')}}" class="ht-1 position-absolute start-0 top-50 z-2 h-150px" alt="Smile Center Turkey"/>
                <img src="{{asset('front/img/ht3.png')}}" class="ht-3 position-absolute end-0 top-0 z-2 h-250px" alt="Smile Center Turkey"/>
                <div class="container-xxl h-100 position-relative z-3">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-4">
                            <div class="hero-text mb-md-5 mb-3 pt-md-0 pt-2">
                                <div class="title text-white fs-1 lh-sm fw-normal pb-lg-4 pb-3 text-balance">
                                    {!! nl2br(e($title)) !!}
                                </div>
                                <p class="text-white-50 fs-15 text-balance mb-0">{{ $description }}</p>
                                <a href="/before-after" class="d-flex align-items-center gap-2 mt-lg-5 mt-3 text-white">
                                    <i class="fa fa-arrow-right"></i>
                                    {{ $galleryText }}
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 align-self-end position-relative h-100">
                            <div
                                class="gradient-hero d-lg-none d-block z-3 position-absolute start-0 end-0 bottom-0 w-100 h-50"></div>
                            <img src="{{asset('front/img/ht2.png')}}"
                                 class="hero-2 position-absolute end-100 top-0 z-1 h-50px mt-5 d-lg-block d-none" alt="Smile Center Turkey"/>
                            <img src="{{asset('front/img/hero-bg.png')}}"
                                 class="hero-bg h-500px position-absolute start-50 translate-middle-x top-0 ms-lg-5" alt="Smile Center Turkey"/>
                            <img src="{{ asset(Storage::url($heroImage)) }}"
                                 class="hero-1 h-600px position-absolute start-50 translate-middle-x bottom-0 z-2 ms-lg-n4" alt="Smile Center Turkey"/>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-3">
                                <div class="col-6 position-relative z-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quateModal"
                                       class="hero-box rounded-1 p-xl-4 p-3 d-flex flex-column gap-xl-3 gap-lg-1 gap-2">
                                        <svg width="30" height="33" viewBox="0 0 30 33" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <div class="fs-5 fw-normal text-white">{{ $quoteTitle }}</div>
                                        <div class="fs-12 text-white">{{ $quoteDescription }}</div>
                                        <i class="fa fa-arrow-right fs-14 text-white"></i>
                                    </a>
                                </div>
                                <div class="col-6 position-relative z-1">
                                    <a href="/dental-implants-turkey"
                                       class="hero-box rounded-1 p-xl-4 p-3 pb-xl-0 pb-0 d-flex flex-column gap-xl-3 gap-1">
                                        <div class="d-flex flex-column">
                                            <div class="fs-12 text-white">{{ $implantSubtitle }}</div>
                                            <div class="fs-5 fw-normal text-white">{{ $implantTitle }}</div>
                                        </div>
                                        <div class="image position-relative text-center">
                                            <div class="icon position-absolute start-50 translate-middle-x top-0">
                                                <svg width="140" height="140" viewBox="0 0 154 163" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M76.7957 2.81834C66.3572 68.7575 0.827393 87.3882 0.827393 87.3882C24.825 87.3882 71.9311 111.31 76.7957 155.495V163C76.7957 161.195 76.8651 159.42 77 157.676C77.1348 159.42 77.2042 161.195 77.2042 163V155.495C82.0689 111.31 129.175 87.3882 153.173 87.3882C153.173 87.3882 87.6428 68.7575 77.2042 2.81834V0C77.1392 0.493808 77.0711 0.985046 77 1.47372C76.9289 0.985046 76.8608 0.493808 76.7957 0V2.81834Z"
                                                        fill="white"
                                                    />
                                                </svg>
                                            </div>
                                            <img src="{{asset('front/img/h2.png')}}"
                                                 class="h-170px position-relative z-1" alt="Smile Center Turkey"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
