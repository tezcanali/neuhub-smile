@aware(['page'])
<div class="hero-page-alt d-flex flex-md-row flex-column-reverse w-100 h-600px position-relative">
    <div class="container-xxl position-relative z-3 h-100">
        <div class="position-absolute start-0 bottom-0 mb-n5 d-lg-block d-none">
            <img src="{{asset('front/img/teeth-4.png')}}" class="h-100px" />
        </div>
        <div class="row h-100">
            <div class="col-lg-12 d-lg-block d-none">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-text-primary mt-4">
                        <li class="breadcrumb-item text-white"><a href="#">Smile Center Turkey</a></li>
                        @if($page->title)
                            <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    @if($image)
        <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" class="w-100 h-100 object-fit-cover position-absolute start-0 top-0" />
    @endif
</div>
