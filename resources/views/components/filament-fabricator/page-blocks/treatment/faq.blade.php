@aware(['page'])
@if(get_country_code() !== true)
<section class="py-lg-5 py-4">
    <div class="container-xxl">
        <div class="bg-primary rounded-4 p-xl-5 p-4 mb-3">
            <div class="row g-4">
                <div class="col-lg-4 text-md-start text-center">
                    <div class="icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_1_911" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="64" height="64">
                                <rect width="63.0507" height="63.0507" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_1_911)">
                                <path
                                    d="M28.8983 55.1689V49.9147H49.9152V31.2622C49.9152 26.1393 48.131 21.7936 44.5625 18.2251C40.994 14.6566 36.6483 12.8724 31.5254 12.8724C26.4026 12.8724 22.0569 14.6566 18.4884 18.2251C14.9199 21.7936 13.1356 26.1393 13.1356 31.2622V47.2876H10.5085C9.06362 47.2876 7.82669 46.7731 6.79773 45.7441C5.76878 44.7152 5.2543 43.4783 5.2543 42.0333V36.7791C5.2543 35.8596 5.48418 34.9949 5.94392 34.1848C6.40367 33.3748 7.0495 32.729 7.88142 32.2473L8.07845 28.7664C8.42873 25.789 9.29349 23.0306 10.6727 20.491C12.052 17.9515 13.7815 15.7403 15.8613 13.8575C17.9411 11.9748 20.3274 10.508 23.0202 9.45713C25.713 8.40628 28.5481 7.88086 31.5254 7.88086C34.5028 7.88086 37.327 8.40628 39.9979 9.45713C42.6688 10.508 45.0551 11.9638 47.1568 13.8247C49.2585 15.6856 50.988 17.8858 52.3453 20.4253C53.7027 22.9649 54.5784 25.7233 54.9725 28.7007L55.1695 32.116C56.0014 32.5101 56.6472 33.1012 57.107 33.8893C57.5667 34.6774 57.7966 35.5093 57.7966 36.3851V42.4274C57.7966 43.3031 57.5667 44.135 57.107 44.9232C56.6472 45.7113 56.0014 46.3024 55.1695 46.6965V49.9147C55.1695 51.3596 54.655 52.5965 53.626 53.6255C52.5971 54.6544 51.3602 55.1689 49.9152 55.1689H28.8983ZM23.6441 36.7791C22.8998 36.7791 22.2758 36.5274 21.7723 36.0238C21.2688 35.5203 21.017 34.8964 21.017 34.152C21.017 33.4077 21.2688 32.7837 21.7723 32.2802C22.2758 31.7767 22.8998 31.5249 23.6441 31.5249C24.3885 31.5249 25.0124 31.7767 25.5159 32.2802C26.0195 32.7837 26.2712 33.4077 26.2712 34.152C26.2712 34.8964 26.0195 35.5203 25.5159 36.0238C25.0124 36.5274 24.3885 36.7791 23.6441 36.7791ZM39.4068 36.7791C38.6624 36.7791 38.0385 36.5274 37.535 36.0238C37.0314 35.5203 36.7797 34.8964 36.7797 34.152C36.7797 33.4077 37.0314 32.7837 37.535 32.2802C38.0385 31.7767 38.6624 31.5249 39.4068 31.5249C40.1511 31.5249 40.7751 31.7767 41.2786 32.2802C41.7821 32.7837 42.0339 33.4077 42.0339 34.152C42.0339 34.8964 41.7821 35.5203 41.2786 36.0238C40.7751 36.5274 40.1511 36.7791 39.4068 36.7791ZM15.8284 32.7071C15.5219 28.0659 16.9231 24.0814 20.0318 20.7537C23.1406 17.426 27.0156 15.7622 31.6568 15.7622C35.5537 15.7622 38.9799 16.9991 41.9354 19.473C44.8909 21.9469 46.6751 25.1104 47.2881 28.9635C43.3037 28.9197 39.6367 27.8469 36.2871 25.7452C32.9375 23.6435 30.3651 20.7975 28.5699 17.2071C27.8694 20.7099 26.3916 23.8296 24.1367 26.5662C21.8817 29.3028 19.1123 31.3497 15.8284 32.7071Z"
                                    fill="#A3FFB7"
                                />
                            </g>
                        </svg>
                    </div>
                    <div class="py-4 d-flex flex-column gap-2">
                        @if($subtitle)
                            <h2 class="fs-4 fw-semibold text-success">{{ $subtitle }}</h2>
                        @endif
                            @if($title)
                                <div class="fs-5 text-white">{{ $title }}</div>
                            @endif
                    </div>
                    @if($description)
                        <div class="fs-5 text-white">{{ $description }}</div>
                    @endif
                    <div class="mt-4 pt-lg-3">
                        <a href="/contact" class="btn btn-success rounded-pill text-white fs-18 fw-semibold px-5">Ask Now</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="fs-3 fw-semibold text-white pb-4 text-md-start text-center">FAQ</div>
                    <div class="faq-list">
                        @foreach($faqs as $faq)
                            <div class="menu-box pb-3">
                                <div class="menu-box-item bg-white bg-opacity-10 text-white rounded-1 py-3 px-4 active">
                                    <h3 class="heading d-flex align-items-center justify-content-between fw-normal fs-5" style="margin-bottom: 0px !important;">
                                        {{ $faq['title'] }}
                                        <div class="icon">
                                            <svg width="28" height="28" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g mask="url(#mask0_1_1401)">
                                                    <path d="M28.3256 10.2998V41.6509L13.9054 27.2307L10.3003 30.9001L30.9006 51.5005L51.501 30.9001L47.8959 27.2307L33.4757 41.6509V10.2998H28.3256Z" fill="currentColor" />
                                                </g>
                                            </svg>
                                        </div>
                                    </h3>
                                    <div class="menu-box-item-content pt-4 text-white">
                                        <p>{{ $faq['description'] }}</p>
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
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
    @foreach($faqs as $faq)
        {
          "@type": "Question",
          "name": "{{ $faq['title'] }}",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "{{ $faq['description'] }}"
        }
      }@if(!$loop->last),@endif
    @endforeach
    ]
  }
</script>
@endif

