@aware(['page'])
<section class="pb-lg-5 pb-4">
    <div class="container-xxl">
        <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4">
            <div class="icon">
                <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor" />
                </svg>
            </div>
            <span class="fs-48">{!! $title !!}</span>
        </div>
    </div>
    <div class="clinic-list swiper">
        <div class="swiper-wrapper">
            @foreach($galleries as $item)
                <div class="swiper-slide">
                    <a href="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}" class="d-block w-100 h-400px object-fit-cover" data-fancybox="gallery">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}" class="w-100 h-100 object-fit-cover" alt="{{ $item['altTag'] ?? $title }}"/>
                    </a>
                </div>
            @endforeach
        </div>
        <button type="button" class="clinic-button-prev w-60px h-60px rounded bg-white text-primary position-absolute top-50 translate-middle-y z-3">
            <svg width="24" height="24" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.75 16.875L9.9 16.875L18.45 25.425L15.125 28.75L0.875002 14.5L15.125 0.250002L18.45 3.575L9.9 12.125L31.75 12.125L31.75 16.875Z" fill="currentcolor" />
            </svg>
        </button>
        <button type="button" class="clinic-button-next w-60px h-60px rounded bg-white text-primary position-absolute top-50 translate-middle-y z-3">
            <svg width="24" height="24" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.249999 12.125L22.1 12.125L13.55 3.575L16.875 0.249999L31.125 14.5L16.875 28.75L13.55 25.425L22.1 16.875L0.249999 16.875L0.249999 12.125Z" fill="currentcolor" />
            </svg>
        </button>
    </div>
</section>
