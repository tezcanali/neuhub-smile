@aware(['page'])
<section class="bg-primary py-lg-5 py-4 overflow-hidden px-lg-0 px-2">
    <div class="container-custom py-lg-4">
        <div class="row g-4 align-items-center">
            <div class="col-xl-3 col-lg-4 text-md-start text-center">
                @if($title)
                    <div class="fs-1 text-white fw-normal lh-sm pb-4">{!! $title !!}</div>
                @endif
                @if($description)
                    <p class="text-white text-balance fw-lighter pe-xl-5">{!! $description !!}</p>
                @endif
                <div class="pt-md-4">
                    <div class="d-flex align-items-center justify-content-md-start justify-content-center gap-3">
                        <button type="button"
                                class="photo-button-prev w-60px h-60px rounded bg-white bg-opacity-75 text-primary">
                            <svg width="32" height="29" viewBox="0 0 32 29" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M31.75 16.875L9.9 16.875L18.45 25.425L15.125 28.75L0.875002 14.5L15.125 0.250002L18.45 3.575L9.9 12.125L31.75 12.125L31.75 16.875Z"
                                    fill="currentcolor"/>
                            </svg>
                        </button>
                        <button type="button"
                                class="photo-button-next w-60px h-60px rounded bg-white bg-opacity-75 text-primary">
                            <svg width="28" height="28" viewBox="0 0 32 29" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.249999 12.125L22.1 12.125L13.55 3.575L16.875 0.249999L31.125 14.5L16.875 28.75L13.55 25.425L22.1 16.875L0.249999 16.875L0.249999 12.125Z"
                                    fill="currentcolor"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="photo-list swiper">
                    <div class="swiper-wrapper">
                        @foreach($galleries as $item)
                            <div class="swiper-slide w-auto">
                                <a href="https://cms.smilecenterturkey.co{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}"
                                   class="d-block w-400px h-425px rounded-3 overflow-hidden position-relative" data-fancybox="gallery">
                                    <div
                                        class="position-absolute start-0 top-0 m-3 bg-white text-primary fs-14 rounded-1 py-2 px-3 fw-semibold z-1">
                                        Before
                                    </div>
                                    <div
                                        class="position-absolute start-0 bottom-0 m-3 bg-white text-primary fs-14 rounded-1 py-2 px-3 fw-semibold z-1">
                                        After
                                    </div>
                                    <img src="https://cms.smilecenterturkey.co{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}"
                                         class="w-100 h-100 object-fit-cover"/>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
