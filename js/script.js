$(document).ready(function () {
    //Animate scroll
    let left = $('.anime-left');
    let right = $('.anime-right');
    let top = $('.anime-top');
    let bottom = $('.anime-bottom');
    let start = 'anime-start';
    let offset = $(window).height() * 3/4;

    if ($(window).scrollTop() > 100) {
        $('.navbar').css("background-color", "#1B242F");
        $("#btnTop").fadeIn();
        animeScroll();
    }
    $(window).scroll(function () {
        animeScroll();
        if ($(this).scrollTop() >= 100) {
            $('.navbar').css("background-color", "#1B242F");
            $("#btnTop").fadeIn();
        } else {
            $('.navbar').css("background-color", "transparent");
            $("#btnTop").fadeOut();
        }
    });

    function animeScroll() {
        lopFun(left);
        lopFun(right);
        lopFun(top);
        lopFun(bottom);
    }

    function lopFun(position){
        let documentTop = $(window).scrollTop();
        position.each(function () {
            let itemTop = $(this).offset().top;
            if (documentTop > (itemTop - offset)) {
                $(this).addClass(start);
            } else {
                $(this).removeClass(start);
            }
        });
    }
    $("#btnTop").on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    // $("a").on('click', function(event) {
    //     if (this.hash !== "") {
    //         event.preventDefault();
    //         var hash = this.hash;
    //         $('html, body').animate({
    //             scrollTop: $(hash).offset().top
    //         }, 800, function() {
    //             window.location.hash = hash;
    //         });
    //     }
    // });
    $(".navbar-nav .nav-item .nav-link").on("click", function () {
        $(".navbar-nav .nav-item .nav-link").removeClass("active");
        $(this).addClass("active");
    });
});