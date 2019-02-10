$(document).ready(function(){
    $("#home-slider").owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        autoplayTimeout: 5000,
        navText: ["", ""],
    });
    // document.querySelector('.owl-carousel .owl-nav button.owl-prev span').textContent = '';
    // document.querySelector('.owl-carousel .owl-nav button.owl-next span').textContent = '';
    $('#portfolio-carousel').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        navText: ["", ""],
        // navText: ["<img src='images/left_sm.png'>", "<img src='images/right_sm.png'>"]
    });
});
