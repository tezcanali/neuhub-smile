@aware(['page'])
<section class="py-lg-5 py-4 position-relative overflow-hidden">
    <div class="container-xxl">
        <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4 position-relative z-1">
            @if($title)
                <div class="icon">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor"></path>
                    </svg>
                </div>
                <span class="fs-48">{{ $title }}</span>
            @endif
        </div>
        <div class="related-list swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{ $url1 }}" class="d-block w-100 h-500px rounded-1 overflow-hidden hover-img-scale position-relative">
                        <div class="text position-absolute start-0 end-0 bottom-0 p-4 d-flex flex-column gap-3 z-3">
                            <div class="fs-5 fw-normal text-white">{{ $title1 }}</div>
                            <div class="d-flex align-items-center gap-2 text-white-50 fs-13">
                                <i class="fa fa-arrow-right"></i>
                                <span class="text-decoration-underline">Go To Treatment *</span>
                            </div>
                        </div>
                        <div class="gradient position-absolute start-0 end-0 bottom-0 w-100 h-75 z-2"></div>
                        <div class="image w-100 h-100 overflow-hidden position-relative z-1">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($image1) }}" class="w-100 h-100 object-fit-cover" alt="{{ $altTag1 ?? $title1 }}"/>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ $url2 }}" class="d-block w-100 h-500px rounded-1 overflow-hidden hover-img-scale position-relative">
                        <div class="text position-absolute start-0 end-0 bottom-0 p-4 d-flex flex-column gap-3 z-3">
                            <div class="fs-5 fw-normal text-white">{{ $title2 }}</div>
                            <div class="d-flex align-items-center gap-2 text-white-50 fs-13">
                                <i class="fa fa-arrow-right"></i>
                                <span class="text-decoration-underline">Go To Treatment *</span>
                            </div>
                        </div>
                        <div class="gradient position-absolute start-0 end-0 bottom-0 w-100 h-75 z-2"></div>
                        <div class="image w-100 h-100 overflow-hidden position-relative z-1">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($image2) }}" class="w-100 h-100 object-fit-cover" alt="{{ $altTag2 ?? $title2 }}"/>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ $url3 }}" class="d-block w-100 h-500px rounded-1 overflow-hidden hover-img-scale position-relative">
                        <div class="text position-absolute start-0 end-0 bottom-0 p-4 d-flex flex-column gap-3 z-3">
                            <div class="fs-5 fw-normal text-white">{{ $title3 }}</div>
                            <div class="d-flex align-items-center gap-2 text-white-50 fs-13">
                                <i class="fa fa-arrow-right"></i>
                                <span class="text-decoration-underline">Go To Treatment *</span>
                            </div>
                        </div>
                        <div class="gradient position-absolute start-0 end-0 bottom-0 w-100 h-75 z-2"></div>
                        <div class="image w-100 h-100 overflow-hidden position-relative z-1">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($image3) }}" class="w-100 h-100 object-fit-cover" alt="{{ $altTag3 ?? $title3 }}"/>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
