@aware(['page'])
<div class="hero-page-alt d-flex flex-md-row flex-column-reverse w-100 h-600px position-relative">
    <div class="container-xxl position-relative z-3 h-100">
        <div class="position-absolute start-0 bottom-0 mb-n5 d-lg-block d-none">
            <img src="{{asset('front/img/teeth-4.png')}}" class="h-100px" />
        </div>
        <div class="row h-100">
            <div class="col-lg-6 d-lg-block d-none">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-text-primary mt-4">
                        <li class="breadcrumb-item text-white"><a href="#">Smile Center Turkey</a></li>
                        @if($page->title)
                            <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                        @endif
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 align-self-end">
                <form action="" class="page-form row g-md-3 g-2 mb-md-n4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control h-65px" id="floatingInput" value="Abdullah" />
                            <label for="floatingInput" class="fs-13">Your Name*</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-md-block d-none">
                        <div class="form-floating">
                            <input type="text" class="form-control h-65px" id="floatingInput" />
                            <label for="floatingInput" class="fs-13">Your Surname*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control h-65px" id="floatingInput" />
                            <label for="floatingInput" class="fs-13">Phone ( Required )*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control h-65px" id="floatingInput" />
                            <label for="floatingInput" class="fs-13">E-Mail Address*</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control h-200px" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Your Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5 fw-bold py-3 w-md-100">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if($image)
        <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" class="w-100 h-100 object-fit-cover position-absolute start-0 top-0" />
    @endif
</div>
