@aware(['page'])
<section class="py-lg-5 py-4 position-relative overflow-hidden">
    <div class="container-xxl">
        <div class="d-md-flex d-none align-items-start gap-3 pb-lg-5 pb-4 position-relative z-1">
            <div class="icon mt-4">
                <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor" />
                </svg>
            </div>
            <div class="d-flex flex-column gap-2">
                @if($title)
                    <span class="fs-54">{!! $title !!}</span>
                @endif
                @if($description)
                        <p class="m-0 fs-5">{!! $description !!}</p>
                    @endif
                </div>
        </div>
        <div class="d-md-none d-block pb-4 text-center fs-4">
            <span class="fw-normal">{{ $title }}</span>
        </div>
        <div class="position-relative">
            <div class="our-doctor-list swiper">
                <div class="swiper-wrapper">
                    @foreach($doctors as $doctor)
                        <div class="swiper-slide">
                            <a href="{{ $url }}" class="d-block w-100 rounded-1 bg-white overflow-hidden p-4">
                                <div class="image position-relative text-center">
                                    <div class="gradient position-absolute start-0 end-0 bottom-0 z-2 h-75"></div>
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" class="h-300px" alt="{{ $altTag ?? $doctor->name }}"/>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex gap-3">
                                        <div class="icon">
                                            <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M10.4718 0.388485C9.03295 9.47786 0 12.046 0 12.046C3.30795 12.046 9.80129 15.3435 10.4718 21.4342V22.4687C10.4718 22.2199 10.4814 21.9753 10.5 21.7348C10.5186 21.9753 10.5282 22.2199 10.5282 22.4687V21.4342C11.1987 15.3435 17.6921 12.046 21 12.046C21 12.046 11.967 9.47786 10.5282 0.388485V0C10.5192 0.0680662 10.5098 0.135778 10.5 0.203137C10.4902 0.135778 10.4808 0.0680662 10.4718 0V0.388485Z"
                                                    fill="currentcolor"
                                                />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fs-18 fw-normal">{!! $name !!}</div>
                                            <span class="text-gray-700">{!! $job !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="button" class="our-doctor-button-prev w-60px h-60px rounded-1 d-flex align-items-center justify-content-center bg-white position-absolute start-0 top-50 translate-middle-y z-3">
                <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.75 12.125L9.9 12.125L18.45 3.575L15.125 0.249999L0.875001 14.5L15.125 28.75L18.45 25.425L9.9 16.875L31.75 16.875L31.75 12.125Z" fill="currentcolor" />
                </svg>
            </button>
            <button type="button" class="our-doctor-button-next w-60px h-60px rounded-1 d-flex align-items-center justify-content-center bg-white position-absolute end-0 top-50 translate-middle-y z-3">
                <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.249999 12.125L22.1 12.125L13.55 3.575L16.875 0.249999L31.125 14.5L16.875 28.75L13.55 25.425L22.1 16.875L0.249999 16.875L0.249999 12.125Z" fill="currentcolor" />
                </svg>
            </button>
        </div>
    </div>
</section>
