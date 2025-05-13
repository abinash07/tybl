/*-----------------------------------------------------------------------------------

    Theme Name: Lifestyle - Nutrition Health and Diet HTML Template
    Description: Nutrition Health and Diet HTML Template
    Author: Chitrakoot Web
    Version: 1.0
        
    ---------------------------------- */

    !function(a) {
        "use strict";
        var s = a(window);
        a("#preloader").fadeOut("normall", function() {
            a(this).remove()
        }),
        s.on("scroll", function() {
            var e = s.scrollTop()
              , o = a(".navbar-brand img")
              , t = a(".navbar-brand.logodefault img");
            e <= 50 ? (a("header").removeClass("scrollHeader").addClass("fixedHeader"),
            o.attr("src", "assets/img/logo.png")) : (a("header").removeClass("fixedHeader").addClass("scrollHeader"),
            o.attr("src", "assets/img/logo.png")),
            t.attr("src", "assets/img/logo.png")
        }),
        s.on("scroll", function() {
            500 < a(this).scrollTop() ? a(".scroll-to-top").fadeIn(400) : a(".scroll-to-top").fadeOut(400)
        }),
        a(".scroll-to-top").on("click", function(e) {
            e.preventDefault(),
            a("html, body").animate({
                scrollTop: 0
            }, 600)
        }),
        a(".parallax,.bg-img").each(function(e) {
            a(this).attr("data-background") && a(this).css("background-image", "url(" + a(this).data("background") + ")")
        }),
        a(".story-video").magnificPopup({
            delegate: ".video",
            type: "iframe"
        }),
        a(".source-modal").magnificPopup({
            type: "inline",
            mainClass: "mfp-fade",
            removalDelay: 160
        }),
        a(".form_date").datetimepicker({
            language: "en",
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        }),
        a(".form_time").datetimepicker({
            language: "en",
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        }),
        0 !== a(".copy-clipboard").length && (new ClipboardJS(".copy-clipboard"),
        a(".copy-clipboard").on("click", function() {
            var e = a(this);
            e.text();
            e.text("Copied"),
            setTimeout(function() {
                e.text("Copy")
            }, 2e3)
        })),
        a(document).ready(function() {
            a(".service-carousel").owlCarousel({
                loop: !0,
                responsiveClass: !0,
                autoplay: !0,
                autoplayTimeout: 5e3,
                smartSpeed: 1500,
                nav: !1,
                dots: !0,
                center: !1,
                margin: 50,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            }),
            a(".team-carousel").owlCarousel({
                loop: !0,
                responsiveClass: !0,
                autoplay: !0,
                smartSpeed: 1500,
                nav: !1,
                dots: !1,
                center: !1,
                margin: 30,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                        margin: 20
                    },
                    992: {
                        items: 2,
                        margin: 20
                    },
                    1200: {
                        items: 3,
                        margin: 20
                    }
                }
            }),
            a(".client-style1").owlCarousel({
                loop: !0,
                nav: !1,
                dots: !1,
                autoplay: !0,
                smartSpeed: 800,
                autoplayTimeout: 3e3,
                responsiveClass: !0,
                autoplayHoverPause: !1,
                responsive: {
                    0: {
                        items: 2,
                        margin: 10
                    },
                    481: {
                        items: 2,
                        margin: 15
                    },
                    576: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 30
                    },
                    1200: {
                        items: 6,
                        margin: 50
                    }
                }
            }),
            a(".testimonial-style1").owlCarousel({
                loop: !0,
                responsiveClass: !0,
                autoplay: !0,
                thumbs: !0,
                thumbsPrerendered: !0,
                smartSpeed: 1e3,
                nav: !1,
                dots: !0,
                center: !0,
                items: 1,
                margin: 0,
                responsive: {
                    0: {
                        dots: !1
                    },
                    481: {},
                    576: {},
                    992: {},
                    1200: {}
                }
            }),
            a(".blog-client").owlCarousel({
                loop: !0,
                responsiveClass: !0,
                autoplay: !0,
                thumbs: !0,
                thumbsPrerendered: !0,
                smartSpeed: 800,
                nav: !1,
                dots: !1,
                center: !0,
                items: 1,
                margin: 0
            }),
            a(".portfolio-details-carousel").owlCarousel({
                loop: !0,
                responsiveClass: !0,
                autoplay: !0,
                smartSpeed: 800,
                nav: !1,
                dots: !0,
                center: !1,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            }),
            a(".slider-fade-02").owlCarousel({
                items: 1,
                loop: !0,
                dots: !1,
                margin: 0,
                nav: !1,
                navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
                autoplay: !0,
                smartSpeed: 1500,
                mouseDrag: !1,
                animateIn: "fadeIn",
                animateOut: "fadeOut",
                responsive: {
                    767: {
                        nav: !1
                    },
                    992: {
                        nav: !0,
                        dots: !1
                    }
                }
            }),
            a(".owl-carousel").owlCarousel({
                items: 1,
                loop: !0,
                dots: !1,
                margin: 0,
                autoplay: !1,
                smartSpeed: 500
            }),
            0 !== a(".horizontaltab").length && a(".horizontaltab").easyResponsiveTabs({
                type: "default",
                width: "auto",
                fit: !0,
                tabidentify: "hor_1",
                activate: function(e) {
                    var o = a(this)
                      , t = a("#nested-tabInfo");
                    a("span", t).text(o.text()),
                    t.show()
                }
            }),
            a(".countup").counterUp({
                delay: 25,
                time: 2e3
            }),
            a(".countdown").countdown({
                date: "01 Mar 2026 00:01:00",
                format: "on"
            }),
            a(".current-year").text((new Date).getFullYear())
        }),
        s.on("load", function() {
            var o = a(".portfolio-gallery-isotope").isotope({});
            a(".filtering").on("click", "span", function() {
                var e = a(this).attr("data-filter");
                o.isotope({
                    filter: e
                })
            }),
            a(".filtering").on("click", "span", function() {
                a(this).addClass("active").siblings().removeClass("active")
            }),
            a(".portfolio-link").on("click", e => {
                e.stopPropagation()
            }
            ),
            a(".portfolio-gallery,.portfolio-gallery-isotope").lightGallery()
        })
    }(jQuery);
    