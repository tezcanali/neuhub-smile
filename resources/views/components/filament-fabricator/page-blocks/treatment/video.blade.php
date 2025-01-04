@aware(['page'])
<section class="py-lg-5 py-4 position-relative overflow-hidden">
    <div class="shape position-absolute start-0 end-0 top-0">
        <svg width="1920" height="279" viewBox="0 0 1920 279" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1913.4 0C1912.36 1.39378 1911.26 2.82739 1910.22 4.22117C1900.2 17.6413 1890.66 30.3048 1876.3 41.8135C1863.28 52.2071 1843.91 59.2158 1825.09 66.0255C1809.26 71.7599 1794.28 77.1757 1782.61 84.4632C1770.45 92.0693 1764.28 101.467 1758.23 110.547C1746.98 127.511 1737.2 142.126 1691.36 140.015C1616.07 136.471 1552.75 135.794 1480.57 161.599C1466.15 166.736 1451.3 172.311 1436.88 177.687C1405.16 189.554 1372.4 201.82 1339.15 211.775C1299.24 223.722 1265.81 229.616 1233.91 230.452C1197.73 231.368 1163.32 225.633 1129.95 220.058C1084.54 212.452 1037.6 204.607 987.306 214.284C975.511 216.554 963.349 219.859 948.925 224.638C937.13 228.54 925.395 232.961 914.028 237.262C873.936 252.354 836.044 266.611 793.934 261.991C748.036 256.934 721.023 232.324 694.865 208.55C689.854 204.01 684.903 199.47 679.831 195.13C665.957 183.183 646.033 171.674 625.132 163.55C590.784 150.21 558.454 148.139 534.008 157.736C504.183 169.444 502.166 188.24 500.271 206.439C499.171 217.111 498.01 228.142 491.226 237.779C476.925 258.407 433.105 272.823 379.689 274.575C367.894 274.934 355.976 274.655 344.364 273.739C308.855 270.951 273.408 263.863 239.122 256.974C214.37 251.996 188.701 246.859 163.032 243.315C127.279 238.377 91.2208 236.425 55.6512 236.425C28.0267 236.425 0.646652 237.62 -26 239.492V243.474C34.7495 239.253 98.7992 238.496 161.81 247.217C187.234 250.722 212.72 255.859 237.411 260.797C271.941 267.726 307.694 274.894 343.753 277.721C352.309 278.398 360.988 278.756 369.666 278.756C373.15 278.756 376.633 278.717 380.056 278.597C436.649 276.765 481.386 261.752 496.849 239.492C504.061 229.178 505.283 217.788 506.444 206.758C508.339 188.798 510.111 171.833 537.247 161.201C567.438 149.334 603.374 159.767 622.076 167.055C642.305 174.94 661.618 186.05 675.003 197.599C680.014 201.939 684.964 206.439 689.915 210.939C716.745 235.39 744.492 260.637 792.896 265.973C837.144 270.832 877.786 255.54 917.022 240.766C928.329 236.505 940.063 232.124 951.675 228.222C965.732 223.563 977.589 220.337 989.017 218.147C1037.67 208.828 1081.73 216.196 1128.42 223.961C1162.16 229.616 1197 235.43 1234.09 234.474C1266.79 233.638 1300.95 227.585 1341.6 215.439C1375.09 205.404 1408.03 193.099 1439.81 181.192C1454.17 175.816 1469.02 170.241 1483.39 165.103C1554.1 139.816 1616.56 140.493 1690.81 143.998C1741.05 146.387 1752.05 129.741 1763.73 112.14C1769.53 103.419 1775.46 94.4188 1786.71 87.3702C1797.83 80.4013 1812.44 75.1448 1827.9 69.5298C1847.21 62.5609 1867.13 55.3132 1880.89 44.3621C1895.74 32.495 1905.33 19.6324 1915.54 6.01318C1917.01 4.02206 1918.53 2.03094 1920 0.0398224H1913.4V0Z"
                fill="white"
                fill-opacity="0.4"
            />
        </svg>
    </div>
    <div class="bg-primary h-200px position-absolute start-0 bottom-0 end-0 z-1"></div>
    <div class="container-xxl">
        <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4 position-relative z-1">
            @if($title)
                <div class="icon text-primary">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor" />
                    </svg>
                </div>
                <span class="fs-48 text-primary">{{ $title }}</span>
            @endif
        </div>
        <div class="video-list swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{ $url1 }}" class="d-block w-100 h-300px overflow-hidden position-relative hover-img-scale">
                        <div class="play-icon position-absolute start-50 top-50 translate-middle z-3">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.9475 44.2772L44.2772 30.5652L22.9475 16.8533V44.2772ZM30.5652 61.0362C26.3501 61.0362 22.3888 60.2364 18.6815 58.6366C14.9742 57.0369 11.7494 54.8658 9.007 52.1235C6.26461 49.3811 4.09356 46.1562 2.49383 42.4489C0.894102 38.7416 0.0942383 34.7804 0.0942383 30.5652C0.0942383 26.3501 0.894102 22.3888 2.49383 18.6815C4.09356 14.9742 6.26461 11.7494 9.007 9.007C11.7494 6.26461 14.9742 4.09356 18.6815 2.49383C22.3888 0.894102 26.3501 0.0942383 30.5652 0.0942383C34.7804 0.0942383 38.7416 0.894102 42.4489 2.49383C46.1562 4.09356 49.3811 6.26461 52.1235 9.007C54.8658 11.7494 57.0369 14.9742 58.6366 18.6815C60.2364 22.3888 61.0362 26.3501 61.0362 30.5652C61.0362 34.7804 60.2364 38.7416 58.6366 42.4489C57.0369 46.1562 54.8658 49.3811 52.1235 52.1235C49.3811 54.8658 46.1562 57.0369 42.4489 58.6366C38.7416 60.2364 34.7804 61.0362 30.5652 61.0362ZM30.5652 54.942C37.3704 54.942 43.1345 52.5805 47.8575 47.8575C52.5805 43.1345 54.942 37.3704 54.942 30.5652C54.942 23.76 52.5805 17.9959 47.8575 13.2729C43.1345 8.54994 37.3704 6.18844 30.5652 6.18844C23.76 6.18844 17.9959 8.54994 13.2729 13.2729C8.54994 17.9959 6.18844 23.76 6.18844 30.5652C6.18844 37.3704 8.54994 43.1345 13.2729 47.8575C17.9959 52.5805 23.76 54.942 30.5652 54.942Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                        <div class="overlay position-absolute start-0 top-0 w-100 h-100 bg-primary bg-opacity-50 z-2"></div>
                        <div class="image overflow-hidden w-100 h-100">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($cover1) }}" class="w-100 h-100 object-fit-cover" alt="{{ $altTag ?? 'Smile Center Turkey' }}"/>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ $url2 }}" class="d-block w-100 h-300px overflow-hidden position-relative hover-img-scale">
                        <div class="play-icon position-absolute start-50 top-50 translate-middle z-3">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.9475 44.2772L44.2772 30.5652L22.9475 16.8533V44.2772ZM30.5652 61.0362C26.3501 61.0362 22.3888 60.2364 18.6815 58.6366C14.9742 57.0369 11.7494 54.8658 9.007 52.1235C6.26461 49.3811 4.09356 46.1562 2.49383 42.4489C0.894102 38.7416 0.0942383 34.7804 0.0942383 30.5652C0.0942383 26.3501 0.894102 22.3888 2.49383 18.6815C4.09356 14.9742 6.26461 11.7494 9.007 9.007C11.7494 6.26461 14.9742 4.09356 18.6815 2.49383C22.3888 0.894102 26.3501 0.0942383 30.5652 0.0942383C34.7804 0.0942383 38.7416 0.894102 42.4489 2.49383C46.1562 4.09356 49.3811 6.26461 52.1235 9.007C54.8658 11.7494 57.0369 14.9742 58.6366 18.6815C60.2364 22.3888 61.0362 26.3501 61.0362 30.5652C61.0362 34.7804 60.2364 38.7416 58.6366 42.4489C57.0369 46.1562 54.8658 49.3811 52.1235 52.1235C49.3811 54.8658 46.1562 57.0369 42.4489 58.6366C38.7416 60.2364 34.7804 61.0362 30.5652 61.0362ZM30.5652 54.942C37.3704 54.942 43.1345 52.5805 47.8575 47.8575C52.5805 43.1345 54.942 37.3704 54.942 30.5652C54.942 23.76 52.5805 17.9959 47.8575 13.2729C43.1345 8.54994 37.3704 6.18844 30.5652 6.18844C23.76 6.18844 17.9959 8.54994 13.2729 13.2729C8.54994 17.9959 6.18844 23.76 6.18844 30.5652C6.18844 37.3704 8.54994 43.1345 13.2729 47.8575C17.9959 52.5805 23.76 54.942 30.5652 54.942Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                        <div class="overlay position-absolute start-0 top-0 w-100 h-100 bg-primary bg-opacity-50 z-2"></div>
                        <div class="image overflow-hidden w-100 h-100">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($cover2) }}" class="w-100 h-100 object-fit-cover" alt="{{ $altTag2 ?? 'Smile Center Turkey' }}"/>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ $url3 }}" class="d-block w-100 h-300px overflow-hidden position-relative hover-img-scale">
                        <div class="play-icon position-absolute start-50 top-50 translate-middle z-3">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.9475 44.2772L44.2772 30.5652L22.9475 16.8533V44.2772ZM30.5652 61.0362C26.3501 61.0362 22.3888 60.2364 18.6815 58.6366C14.9742 57.0369 11.7494 54.8658 9.007 52.1235C6.26461 49.3811 4.09356 46.1562 2.49383 42.4489C0.894102 38.7416 0.0942383 34.7804 0.0942383 30.5652C0.0942383 26.3501 0.894102 22.3888 2.49383 18.6815C4.09356 14.9742 6.26461 11.7494 9.007 9.007C11.7494 6.26461 14.9742 4.09356 18.6815 2.49383C22.3888 0.894102 26.3501 0.0942383 30.5652 0.0942383C34.7804 0.0942383 38.7416 0.894102 42.4489 2.49383C46.1562 4.09356 49.3811 6.26461 52.1235 9.007C54.8658 11.7494 57.0369 14.9742 58.6366 18.6815C60.2364 22.3888 61.0362 26.3501 61.0362 30.5652C61.0362 34.7804 60.2364 38.7416 58.6366 42.4489C57.0369 46.1562 54.8658 49.3811 52.1235 52.1235C49.3811 54.8658 46.1562 57.0369 42.4489 58.6366C38.7416 60.2364 34.7804 61.0362 30.5652 61.0362ZM30.5652 54.942C37.3704 54.942 43.1345 52.5805 47.8575 47.8575C52.5805 43.1345 54.942 37.3704 54.942 30.5652C54.942 23.76 52.5805 17.9959 47.8575 13.2729C43.1345 8.54994 37.3704 6.18844 30.5652 6.18844C23.76 6.18844 17.9959 8.54994 13.2729 13.2729C8.54994 17.9959 6.18844 23.76 6.18844 30.5652C6.18844 37.3704 8.54994 43.1345 13.2729 47.8575C17.9959 52.5805 23.76 54.942 30.5652 54.942Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                        <div class="overlay position-absolute start-0 top-0 w-100 h-100 bg-primary bg-opacity-50 z-2"></div>
                        <div class="image overflow-hidden w-100 h-100">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($cover3) }}" class="w-100 h-100 object-fit-cover" alt="{{ $altTag3 ?? 'Smile Center Turkey' }}"/>
                        </div>
                    </a>
                </div>
            </div>
            <button type="button" class="video-button-prev w-45px h-45px rounded-1 d-xl-none d-flex align-items-center justify-content-center bg-white position-absolute start-0 top-50 translate-middle-y z-3 ms-2">
                <svg width="16" height="16" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.75 12.125L9.9 12.125L18.45 3.575L15.125 0.249999L0.875001 14.5L15.125 28.75L18.45 25.425L9.9 16.875L31.75 16.875L31.75 12.125Z" fill="currentcolor" />
                </svg>
            </button>
            <button type="button" class="video-button-next w-45px h-45px rounded-1 d-xl-none d-flex align-items-center justify-content-center bg-white position-absolute end-0 top-50 translate-middle-y z-3 me-2">
                <svg width="16" height="16" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.249999 12.125L22.1 12.125L13.55 3.575L16.875 0.249999L31.125 14.5L16.875 28.75L13.55 25.425L22.1 16.875L0.249999 16.875L0.249999 12.125Z" fill="currentcolor" />
                </svg>
            </button>
        </div>
    </div>
</section>
