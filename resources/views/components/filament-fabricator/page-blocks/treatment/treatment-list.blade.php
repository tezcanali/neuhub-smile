@aware(['page'])
<div class="row g-4">
    <div class="col-lg-4">
        <a href="{{ $url }}" class="d-block w-100 bg-white rounded-3 p-3">
            <div class="image mb-3">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}"
                     class="w-100 h-300px object-fit-cover rounded-1"/>
            </div>
            <div class="fs-5 fw-normal pb-2">{{ $title }}</div>
            <span class="d-flex align-items-center fs-13 gap-2 pb-2">
                                <i class="fa fa-arrow-right"></i>
                                View More *
                            </span>
        </a>
    </div>
</div>
