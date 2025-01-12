@aware(['page'])
<section class="pb-lg-5 pb-4 position-relative overflow-hidden">
    <div class="container-xxl position-relative z-2">
        <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4">
            <div class="icon text-primary">
                <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z"
                          fill="currentcolor"/>
                </svg>
            </div>
            <span class="fs-48 text-primary">News</span>
        </div>
    </div>
    <div class="news-list swiper">
        <div class="swiper-wrapper">
            @foreach($blogs as $blog)
                <div class="swiper-slide">
                    <div class="w-100 bg-white row g-0 align-items-center rounded-1 overflow-hidden p-3">
                        <div class="col-lg-4">
                            <img src="{{ asset(Storage::url($blog->image)) }}"
                                 class="w-100 h-300px object-fit-cover rounded-1" alt="{{ $blog->title }}"/>
                        </div>
                        <div class="col-lg-8">
                            <div class="px-lg-4 px-3 py-lg-0 py-3">
                                <span class="fs-10 fw-semibold text-gray-500 pb-2">SMILE CENTER TURKEY NEWS</span>
                                <div class="fs-3 fw-normal pb-3">{{ $blog->title }}</div>
                                <p class="fs-13">{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                                <a href="/blog/{{ $blog->slug }}" class="d-flex align-items-center gap-2 fs-13">
                                    <i class="fa fa-arrow-right"></i>
                                    <span class="text-decoration-underline">Read More *</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
