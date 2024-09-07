@aware(['page'])
<section class="pb-lg-5 pb-4">
    <div class="container-xxl">
        @if($title)
            <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4">
                <div class="icon">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z" fill="currentcolor" />
                    </svg>
                </div>
                <h2 class="fs-48">{!! $title !!}</h2>
            </div>
        @endif
    </div>
    <div class="container-fluid">
        <div class="steps row g-xl-3 g-2 row-cols-xl-4 row-cols-lg-3 row-cols-2 align-items-end">
            <div class="col-xl-4 col">
                <div class="row g-0 align-items-end">
                    <div class="col-md-6 align-items-end d-xl-block d-md-none d-block">
                        <img src="{{asset('front/img/step-man.png')}}" class="h-300px" />
                    </div>
                    <div class="col-xl-6 col">
                        <div class="bg-white rounded p-xl-4 p-3">
                            <div class="fw-semibold pb-md-3 pb-1 fs-18">STAGE 1</div>
                            <div class="{{ $color1 }} fs-3 fw-semibold pb-md-3 pb-1">{!! $title1 !!}</div>
                            <div class="fs-14">{!! $description1 !!}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col">
                <div class="bg-white rounded p-xl-4 p-3">
                    <div class="fw-semibold pb-md-3 pb-1 fs-18">STAGE 2</div>
                    <div class="{{ $color2 }} fs-3 fw-semibold pb-md-3 pb-1">{!! $title2 !!}</div>
                    <div class="fs-14">{!! $description2 !!}</div>
                </div>
            </div>
            <div class="col-xl-2 col">
                <div class="bg-white rounded p-xl-4 p-3">
                    <div class="fw-semibold pb-md-3 pb-1 fs-18">STAGE 3</div>
                    <div class="{{ $color3 }} fs-3 fw-semibold pb-md-3 pb-1">{!! $title3 !!}</div>
                    <div class="fs-14">{!! $description3 !!}</div>
                </div>
            </div>
            <div class="col-xl-2 col">
                <div class="bg-white rounded p-xl-4 p-3">
                    <div class="fw-semibold pb-md-3 pb-1 fs-18">STAGE 4</div>
                    <div class="{{ $color4 }} fs-3 fw-semibold pb-md-3 pb-1">{!! $title4 !!}</div>
                    <div class="fs-14">{!! $description4 !!}</div>
                </div>
            </div>
            <div class="col-xl-2 col">
                <div class="bg-white rounded p-xl-4 p-3">
                    <div class="fw-semibold pb-md-3 pb-1 fs-18">STAGE 5</div>
                    <div class="{{ $color5 }} fs-3 fw-semibold pb-md-3 pb-1">{!! $title5 !!}</div>
                    <div class="fs-14">{!! $description5 !!}</div>
                </div>
            </div>
        </div>
    </div>
</section>
