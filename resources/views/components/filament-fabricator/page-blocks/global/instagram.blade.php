@aware(['page'])
<div class="pt-lg-5 pt-4">
    <div class="d-flex justify-content-center">
        <div class="d-flex align-items-center justify-content-center gap-lg-5 gap-md-4 gap-3 flex-wrap">
            <div class="d-flex align-items-center gap-3">
                <div class="w-100px h-100px rounded-circle d-flex align-items-center justify-content-center bg-white">
                    <img src="{{asset('front/img/logo-2.png')}}" class="h-30px" />
                </div>
                <div class="d-flex flex-column">
                    <div class="fw-semibold text-black">Smile Center Turkey</div>
                    <div class="text-black-50 fs-13">@smilecenterturkey</div>
                </div>
            </div>
            <div class="d-flex align-items-center gap-4 flex-wrap">
                <div class="d-flex flex-column">
                    <div class="fs-5 fw-semibold text-black">1.1K</div>
                    <span class="fs-13 text-black-50">gönderi</span>
                </div>
                <div class="d-flex flex-column">
                    <div class="fs-5 fw-semibold text-black">33.1K</div>
                    <span class="fs-13 text-black-50">takipçi</span>
                </div>
                <div class="d-flex flex-column">
                    <div class="fs-5 fw-semibold text-black">412</div>
                    <span class="fs-13 text-black-50">takip</span>
                </div>
            </div>
            <a href="#" class="btn d-flex align-items-center gap-3 px-4 fw-normal text-white" style="background: #0095f6">
                <i class="fab fa-instagram"></i>
                Takip Et
            </a>
        </div>
    </div>
</div>

<section>
    <div class="gallery-list swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="{{asset('front/img/gallery/')}}" class="d-block w-100 h-425px overflow-hidden" data-fancybox>
                    <img src="{{asset('front/img/gallery/1.png')}}" class="w-100 h-100 object-fit-cover" />
                </a>
            </div>
            <div class="swiper-slideuto">
                <a href="{{asset('front/img/gallery/2.png')}}" class="d-block w-100 h-425px overflow-hidden" data-fancybox>
                    <img src="{{asset('front/img/gallery/2.png')}}" class="w-100 h-100 object-fit-cover" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('front/img/gallery/3.png')}}" class="d-block w-100 h-425px overflow-hidden" data-fancybox>
                    <img src="{{asset('front/img/gallery/3.png')}}" class="w-100 h-100 object-fit-cover" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('front/img/gallery/4.png')}}" class="d-block w-100 h-425px overflow-hidden" data-fancybox>
                    <img src="{{asset('front/img/gallery/4.png')}}" class="w-100 h-100 object-fit-cover" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{asset('front/img/gallery/2.png')}}" class="d-block w-100 h-425px overflow-hidden" data-fancybox>
                    <img src="{{asset('front/img/gallery/2.png')}}" class="w-100 h-100 object-fit-cover" />
                </a>
            </div>
        </div>
        <button type="button" class="gallery-button-prev w-45px h-45px rounded-1 d-xl-none d-flex align-items-center justify-content-center bg-white position-absolute start-0 top-50 translate-middle-y z-3 ms-1">
            <svg width="16" height="16" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.75 12.125L9.9 12.125L18.45 3.575L15.125 0.249999L0.875001 14.5L15.125 28.75L18.45 25.425L9.9 16.875L31.75 16.875L31.75 12.125Z" fill="currentcolor" />
            </svg>
        </button>
        <button type="button" class="gallery-button-next w-45px h-45px rounded-1 d-xl-none d-flex align-items-center justify-content-center bg-white position-absolute end-0 top-50 translate-middle-y z-3 me-1">
            <svg width="16" height="16" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.249999 12.125L22.1 12.125L13.55 3.575L16.875 0.249999L31.125 14.5L16.875 28.75L13.55 25.425L22.1 16.875L0.249999 16.875L0.249999 12.125Z" fill="currentcolor" />
            </svg>
        </button>
    </div>
</section>
