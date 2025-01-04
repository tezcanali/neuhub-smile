@aware(['page'])
<section class="py-lg-5 py-4 position-relative">
    <div class="container-xxl">
        <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4 position-relative z-1">
            @if($title)
                <div class="icon text-primary">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
                <h2 class="fs-48 text-primary">{{ $title }}</h2>
            @endif
        </div>
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="tab-box-title bg-primary p-xxl-5 p-4 text-white fw-semibold d-flex align-items-center gap-lg-4 gap-3 fs-5">
                    @if($prosTitle)
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0833 30.6163L0.25 17.783L4.74167 13.2913L13.0833 21.633L34.2583 0.458008L38.75 4.94968L13.0833 30.6163Z" fill="white" />
                            </svg>
                        </div>
                        <span>{{ $prosTitle }}</span>
                    @endif
                </div>
                <div class="bg-white p-4">
                    <div class="accordion faq-accordion" id="accordionExample">
                        @foreach($pros as $item)
                            <div class="accordion-item mb-3">
                                <span class="accordion-header" id="headingOne">
                                    <button class="accordion-button fs-18 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pros{{ $loop->iteration }}" aria-expanded="true" aria-controls="pros{{ $loop->iteration }}">{{ $item['title'] }}</button>
                                </span>
                                <div id="pros{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body fs-16 text-justify">
                                        {!! $item['description'] !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tab-box-title bg-blue p-xxl-5 p-4 text-white fw-semibold d-flex align-items-center gap-lg-4 gap-3 fs-5">
                    @if($consTitle)
                        <div class="icon">
                            <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8498 44.791L30.4998 34.141L41.1498 44.791L45.2915 40.6494L34.6415 29.9994L45.2915 19.3493L41.1498 15.2077L30.4998 25.8577L19.8498 15.2077L15.7082 19.3493L26.3582 29.9994L15.7082 40.6494L19.8498 44.791ZM30.4998 59.5827C26.4075 59.5827 22.5616 58.8061 18.9623 57.253C15.363 55.6999 12.2321 53.5921 9.56963 50.9296C6.90713 48.2671 4.79932 45.1362 3.24619 41.5369C1.69307 37.9375 0.916504 34.0917 0.916504 29.9994C0.916504 25.907 1.69307 22.0612 3.24619 18.4618C4.79932 14.8625 6.90713 11.7316 9.56963 9.06914C12.2321 6.40664 15.363 4.29883 18.9623 2.7457C22.5616 1.19258 26.4075 0.416016 30.4998 0.416016C34.5922 0.416016 38.438 1.19258 42.0373 2.7457C45.6366 4.29883 48.7676 6.40664 51.43 9.06914C54.0926 11.7316 56.2004 14.8625 57.7535 18.4618C59.3066 22.0612 60.0832 25.907 60.0832 29.9994C60.0832 34.0917 59.3066 37.9375 57.7535 41.5369C56.2004 45.1362 54.0926 48.2671 51.43 50.9296C48.7676 53.5921 45.6366 55.6999 42.0373 57.253C38.438 58.8061 34.5922 59.5827 30.4998 59.5827ZM30.4998 53.666C37.1068 53.666 42.703 51.3733 47.2884 46.7879C51.8738 42.2025 54.1665 36.6063 54.1665 29.9994C54.1665 23.3924 51.8738 17.7962 47.2884 13.2108C42.703 8.62539 37.1068 6.33268 30.4998 6.33268C23.8929 6.33268 18.2967 8.62539 13.7113 13.2108C9.12588 17.7962 6.83317 23.3924 6.83317 29.9994C6.83317 36.6063 9.12588 42.2025 13.7113 46.7879C18.2967 51.3733 23.8929 53.666 30.4998 53.666Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                        <span>{{ $consTitle }}</span>
                    @endif
                </div>
                <div class="bg-white p-4">
                    <div class="accordion faq-accordion" id="accordionExample">
                        @foreach($cons as $item)
                            <div class="accordion-item mb-3">
                                <span class="accordion-header" id="headingOne">
                                    <button class="accordion-button fs-18 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cons{{ $loop->iteration }}" aria-expanded="true" aria-controls="cons{{ $loop->iteration }}">{{ $item['title'] }}</button>
                                </span>
                                <div id="cons{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body fs-16 text-justify">
                                        {!! $item['description'] !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
