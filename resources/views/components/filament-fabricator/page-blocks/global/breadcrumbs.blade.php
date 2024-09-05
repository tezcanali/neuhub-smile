@aware(['page'])
<section>
    <div class="container-xxl mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-primary mt-2">
                <li class="breadcrumb-item text-primary"><a href="/">Home</a></li>
                @if($page->title)
                    <li class="breadcrumb-item active" aria-current="page" style="color:#475174 !important;">{{ $page->title }}</li>
                @endif
            </ol>
        </nav>
    </div>
</section>
