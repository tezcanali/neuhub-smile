@aware(['page'])
<section class="py-lg-5 py-4">
    <div class="container-xxl">
        <div class="row g-xl-5 g-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-primary mt-2">
                    <li class="breadcrumb-item text-primary"><a href="#">Smile Center Turkey</a></li>
                    @if($page->title)
                        <li class="breadcrumb-item active" aria-current="page" style="color:#475174 !important;">{{ $page->title }}</li>
                    @endif
                </ol>
            </nav>
            <div class="col-lg-6 order-md-1 order-2">
                @if($title)
                <div class="title d-md-flex d-none gap-3 pb-lg-5 pb-4">
                    <div class="icon mt-3">
                        <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z"
                                fill="#192D74"
                            />
                        </svg>
                    </div>
                        <div class="fs-54 fw-bold text-primary lh-sm">
                            {!! $title !!}
                        </div>
                </div>
                @endif
                {!! $content !!}
            </div>
            <div class="col-lg-6 order-md-2 order-1">
                <div class="title d-md-none d-flex gap-2 pb-lg-5 pb-4">
                    <div class="icon">
                        <svg width="18" height="18" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z"
                                fill="#192D74"
                            />
                        </svg>
                    </div>
                    @if($title)
                        <div class="fs-2 fw-bold text-primary lh-sm">{!! $title !!}</span></div>
                    @endif
                </div>
                <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" class="img-fluid rounded-1" />
            </div>
        </div>
    </div>
</section>
