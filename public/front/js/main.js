var swiper = new Swiper(".hero-list", {
    slidesPerView: 1,
    loop: false,
    speed: 600,
    spaceBetween: 0,
    autoplay: {
        delay: 3000,
    },
});

var swiper = new Swiper(".popular-list", {
    loop: false,
    speed: 600,
    spaceBetween: 10,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 20,
            autoplay: false,
        },
    },
    navigation: {
        nextEl: ".photo-button-next",
        prevEl: ".photo-button-prev",
    },
});

var swiper = new Swiper(".review-list", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    speed: 600,
    autoplay: {
        delay: 3000,
    },
    spaceBetween: 20,
    breakpoints: {
        640: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
        1200: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
        1400: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
    },
});

var swiper = new Swiper(".news-list", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    speed: 600,
    autoplay: {
        delay: 3000,
    },
    spaceBetween: 20,
    breakpoints: {
        640: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
        1200: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
        1400: {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: false,
        },
    },
});

var swiper = new Swiper(".photo-list", {
    loop: false,
    speed: 600,
    autoplay: {
        delay: 3000,
    },
    spaceBetween: 10,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: "auto",
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".photo-button-next",
        prevEl: ".photo-button-prev",
    },
});

var swiper = new Swiper(".comment-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: ".comment-button-next",
        prevEl: ".comment-button-prev",
    },
});

var swiper = new Swiper(".clinic-list", {
    loop: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: false,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: true,
        },
        820: {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: true,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
        },
    },
    navigation: {
        nextEl: ".clinic-button-next",
        prevEl: ".clinic-button-prev",
    },
});

var swiper = new Swiper(".our-doctor-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: ".our-doctor-button-next",
        prevEl: ".our-doctor-button-prev",
    },
});

var swiper = new Swiper(".video-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".video-button-next",
        prevEl: ".video-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 3000,
            },
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
            autoplay: false,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 20,
            autoplay: false,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: false,
        },
    },
});

var swiper = new Swiper(".related-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

var swiper = new Swiper(".gallery-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: false,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".gallery-button-next",
        prevEl: ".gallery-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 0,
        },
    },
});

var swiper = new Swiper(".who-list", {
    speed: 800,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

var swiper = new Swiper(".award-list", {
    loop: true,
    autoplay: {
        delay: 3000,
    },
    spaceBetween: 10,
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: false,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: true,
        },
        820: {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: true,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
        },
    },
    navigation: {
        nextEl: ".award-button-next",
        prevEl: ".award-button-prev",
    },
});

// show-more
$(document).ready(function () {
    $(".show-more-btn").click(function () {
        $(".show-more-content").toggleClass("hide-more");
        $(this).text(function (i, v) {
            return v == "devamını göster" ? "devamını gizle" : "devamını göster";
        });
    });
});

// header
$(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
        $("header").addClass("active");
    } else {
        $("header").removeClass("active");
    }
});

$(".webmenu a").click(function () {
    $(".offcanvas").offcanvas("hide");
});

$.fn.accordion = function () {
    var accordion = this;
    accordion.find(".menu-box-item").click(function () {
        $(document).find(".menu-box-item").removeClass("active");
        $(document).find(".menu-box-item-content").removeClass("active");
        $(this).parent(".menu-box").find(".menu-box-item-content").slideToggle(200).toggleClass("active");
        $(this).toggleClass("active");
        $(".menu-box-item-content").not(".active");
        $('.menu-box-item-content:not(".active")').slideUp(200);
    });
    return this;
};

$(".menu-box").accordion();

// fancybox
Fancybox.bind("[data-fancybox]", {
    // Your custom options
});

// tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// popover
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});

// toast
const toastTrigger = document.getElementById("liveToastBtn");
const toastLiveExample = document.getElementById("liveToast");

if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
    toastTrigger.addEventListener("click", () => {
        toastBootstrap.show();
    });
}
