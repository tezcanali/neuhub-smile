@aware(['page'])
<section class="pb-lg-5 pb-4">
    <div class="container-xxl">
        <div class="d-flex justify-content-center">
            <div class="d-flex align-items-center justify-content-center gap-lg-5 gap-md-4 gap-3 flex-wrap">
                <div class="d-flex align-items-center gap-3">
                    <div class="w-100px h-100px rounded-circle d-flex align-items-center justify-content-center bg-white">
                        <img src="{{ asset(Storage::url($profileImage)) }}" alt="Smile Center Turkey" class="h-30px"/>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fw-semibold text-black">{{ $profileName }}</div>
                        <div class="text-black-50 fs-13">{{ '@' . $username }}</div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-4 flex-wrap">
                    <div class="d-flex flex-column">
                        <div class="fs-5 fw-semibold text-black">{{ $postCount }}</div>
                        <span class="fs-13 text-black-50">post</span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fs-5 fw-semibold text-black">{{ $followerCount }}</div>
                        <span class="fs-13 text-black-50">follower</span>
                    </div>
                </div>
                <a href="{{ $instagramUrl }}" class="btn d-flex align-items-center gap-3 px-4 fw-normal text-white" style="background: #0095f6">
                    <i class="fab fa-instagram"></i>
                    Follow Us
                </a>
            </div>
        </div>
    </div>
</section>
