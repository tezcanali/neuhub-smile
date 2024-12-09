@aware(['page'])
<section class="py-lg-5 py-4">
    <div class="container-xxl text-md-start text-center">
        <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4">
            @if($title)
                <div class="icon">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor" />
                    </svg>
                </div>
                <h2 class="fs-48 fw-semibold text-primary">{!! $title !!}</h2>
            @endif
        </div>
        {!! $content !!}
    </div>
</section>
