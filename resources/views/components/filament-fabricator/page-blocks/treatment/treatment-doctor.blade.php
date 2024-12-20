@php use App\Models\Doctor; @endphp
@php use Illuminate\Support\Facades\Storage; @endphp
@aware(['page'])
@php
    $doctorId = null;

    if ($doctor) {
        $doctorId = Doctor::find($doctor);
    }
@endphp
@if($doctorId)
    <section class="py-lg-5 py-4">
        <div class="container-xxl">
            <div class="bg-white rounded-3 p-md-4 p-3">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <img src="{{ Storage::url($doctorId->image) }}"
                             class="object-fit-cover rounded-1 w-100 h-400"/>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-md-4 p-2">
                            <div class="fs-5 pb-2 fw-normal">{{ $doctorId->name }}</div>
                            <div class="fs-18 text-black-50">{{ $doctorId->job_title }}</div>
                            <hr class="my-4"/>
                            <ul class="list-unstyled m-0 fs-18 text-black-50 d-flex flex-column gap-2 pt-lg-2">
                                <li>{!! $doctorId->content !!}</li>
                            </ul>
                            <div
                                class="d-flex align-items-center justify-content-md-start justify-content-center gap-md-3 gap-2 flex-wrap mt-4 pt-lg-2">
                                <a href="/doctors/{{ $doctorId->slug }}"
                                   class="btn btn-primary rounded-pill px-4 fs-18 fw-normal">Education and
                                    Experience</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
