@aware(['page'])
@php
    $doctorId = null;

    if ($doctor) {
        $doctorId = \App\Models\Doctor::find($doctor);
    }
@endphp
@if($doctorId)
    <div class="bg-white rounded-3 p-md-4 p-3">
        <div class="row g-4">
            <div class="col-lg-5">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($doctorId->image) }}" class="object-fit-cover rounded-1" style="width: 350px !important;"/>
            </div>
            <div class="col-lg-7">
                <div class="p-md-4 p-2">
                    <div class="fs-5 pb-2 fw-normal">{{ $doctorId->name }}</div>
                    <div class="fs-18 text-black-50">{{ $doctorId->job_title }}</div>
                    <hr class="my-4" />
                    <ul class="list-unstyled m-0 fs-18 text-black-50 d-flex flex-column gap-2 pt-lg-2">
                        <li>{!! $doctorId->content !!}</li>
                    </ul>
                    <div class="d-flex align-items-center justify-content-md-start justify-content-center gap-md-3 gap-2 flex-wrap mt-4 pt-lg-2">
                        <a href="/doctors/{{ $doctorId->slug }}" class="btn btn-primary rounded-pill px-4 fs-18 fw-normal">Eğitim ve Deneyim Bilgileri</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
