$(document).ready(function () {
    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });



    /**
     * Home page OWL carousel
     */
    $('.owl-carousel').owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

});
