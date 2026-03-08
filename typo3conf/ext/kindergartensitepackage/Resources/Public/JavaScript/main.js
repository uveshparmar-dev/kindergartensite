console.log('WE LOVE TYPO3');

/* ==========================================================
   SEARCH ICON TOGGLE
========================================================== */
document.addEventListener("DOMContentLoaded", function () {

    const allSearchIcons = document.querySelectorAll(".search-icon, .mobile-search-icon");

    if (allSearchIcons.length > 0) {
        allSearchIcons.forEach(icon => {
            icon.addEventListener("click", function (e) {
                e.stopPropagation();

                const isMobile = icon.closest(".mobile-menu-panel");
                const popup = isMobile
                    ? document.querySelector(".mobile-search-popup")
                    : document.querySelector(".desktop-search-popup");

                popup.classList.toggle("active");
            });
        });

        document.addEventListener("click", function (e) {
            document.querySelectorAll(".search-popup").forEach(popup => {
                const relatedIcon = popup.classList.contains("mobile-search-popup")
                    ? document.querySelector(".mobile-search-icon")
                    : document.querySelector(".search-icon");

                if (!popup.contains(e.target) && !relatedIcon.contains(e.target)) {
                    popup.classList.remove("active");
                }
            });
        });
    }

    /* ==========================================================
       HAMBURGER MOBILE MENU
    =========================================================== */
    const hamburger = document.querySelector(".mobile-hamburger");
    const mobilePanel = document.querySelector(".mobile-menu-panel");
    const mobileClose = document.querySelector(".mobile-menu-close");

    if (hamburger && mobilePanel && mobileClose) {
        hamburger.addEventListener("click", () => mobilePanel.classList.add("open"));
        mobileClose.addEventListener("click", () => mobilePanel.classList.remove("open"));
    }

    /* ==========================================================
       AUTO CLOSE MOBILE ON DESKTOP
    =========================================================== */
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 992 && mobilePanel && mobilePanel.classList.contains("open")) {
            mobilePanel.classList.remove("open");
        }
    });

    /* ==========================================================
       CTA JARALLAX INIT
    =========================================================== */
    if (typeof jarallax === "function") {
        jarallax(document.querySelectorAll('.jarallax'), { speed: 0.4 });
    }

}); // END DOMContentLoaded

/* ==========================================================
   HERO SLIDER — SWIPER + JARALLAX (REFERENCE BEHAVIOR)
========================================================== */

document.addEventListener("DOMContentLoaded", function () {

    if (typeof Swiper === "undefined") {
        console.warn("Swiper not loaded");
        return;
    }

    var heroSwiper = new Swiper(".hero-slider", {
        effect: "fade",
        speed: 1200,

        loop: false, // ✅ IMPORTANT — matches reference site

        fadeEffect: {
            crossFade: true
        },

        navigation: {
            nextEl: ".main-slider-button-next",
            prevEl: ".main-slider-button-prev"
        },

        allowTouchMove: false,
        observer: true,
        observeParents: true,

        on: {
            init: function () {
                refreshJarallax();
            },
            slideChangeTransitionEnd: function () {
                refreshJarallax();
            }
        }
    });

    function refreshJarallax() {
        if (typeof jarallax === "function") {
            jarallax(document.querySelectorAll(".jarallax"), {
                speed: 0.3,
                disableParallax: /iPad|iPhone|iPod|Android/
            });
        }
    }

});



/* ==========================================================
   SWIPER SLIDERS
========================================================== */
document.addEventListener("DOMContentLoaded", function () {
    if (typeof Swiper !== "undefined") {
        new Swiper(".classes-swiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: false,
            speed: 700,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    } else {
        console.warn("Swiper JS not loaded.");
    }
});


/* ==========================================================
   ISOTOPE MASONRY GALLERY (FIXED + STABLE)
========================================================== */
$(window).on("load", function () {

    var $gallery = $('#masonry-gallery');

    if ($gallery.length) {

        $gallery.imagesLoaded(function () {

            $gallery.isotope({
                itemSelector: '.entry-item',
                layoutMode: 'masonry',
                percentPosition: true
            });

            console.log("Isotope masonry gallery initialized properly");

        });

    }

});



/* ==========================================================
   CHOCOLAT LIGHTBOX (Gallery Popup Like Reference Site)
========================================================== */
document.addEventListener("DOMContentLoaded", function () {

    if (typeof Chocolat !== "undefined") {
        Chocolat(document.querySelectorAll('.image-link'), {
            loop: true,
            imageSize: 'contain'
        });

        console.log("Chocolat lightbox initialized");
    } else {
        console.warn("Chocolat not loaded");
    }

});



var swiper = new Swiper(".testimonial-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});



