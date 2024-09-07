@aware(['page'])
<section class="pb-lg-5 pb-4 position-relative overflow-hidden">
    <div class="container-xxl">
        @if($title)
            <div class="d-flex align-items-center gap-3 pb-lg-5 pb-4 position-relative z-1">
                <div class="icon">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M14.9598 0.55499C12.9042 13.5398 0 17.2086 0 17.2086C4.72563 17.2086 14.0018 21.9193 14.9598 30.6203V32.0982C14.9598 31.7427 14.9734 31.3932 15 31.0497C15.0266 31.3932 15.0402 31.7427 15.0402 32.0982V30.6203C15.9982 21.9193 25.2744 17.2086 30 17.2086C30 17.2086 17.0958 13.5398 15.0402 0.55499V0C15.0274 0.0972397 15.014 0.193973 15 0.290203C14.986 0.193973 14.9726 0.0972397 14.9598 0V0.55499Z"
                              fill="currentcolor"/>
                    </svg>
                </div>
                <h2 class="fs-48">{!! $title !!}</h2>
            </div>
        @endif
    </div>
</section>

<section class="py-lg-5 py-4">
    <div class="container-xxl">
        <div class="table-responsive">
            <table class="table table-page table-bordered border-primary m-0">
                <thead>
                <tr>
                    <th class="p-4 bg-primary text-white fs-5 fw-semibold text-center">Treatments</th>
                    <th class="p-4 bg-primary text-white fs-5 fw-semibold text-center">TR</th>
                    <th class="p-4 bg-primary text-white fs-5 fw-semibold text-center">US</th>
                    <th class="p-4 bg-primary text-white fs-5 fw-semibold text-center">UK</th>
                    <th class="p-4 bg-primary text-white fs-5 fw-semibold text-center">Savings</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tables as $item)
                    <tr>
                        <td class="p-4 bg-white text-primary fs-5 fw-normal text-center">{!! $item['title'] !!}</td>
                        <td class="p-4 bg-white text-primary fs-5 fw-semibold text-center">{!! $item['trPrice'] !!}</td>
                        <td class="p-4 bg-white text-primary fs-5 fw-semibold text-center">{!! $item['usPrice'] !!}</td>
                        <td class="p-4 bg-white text-primary fs-5 fw-semibold text-center">{!! $item['ukPrice'] !!}</td>
                        <td class="p-4 bg-white text-primary fs-5 fw-semibold text-center">{!! $item['saving'] !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="p-md-4 p-2 prices-text bg-primary text-center text-white fs-5 fw-semibold">Prices</div>
        </div>
    </div>
</section>
