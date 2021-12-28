$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 100) {
            $('.navbar').css("background-color", "#1B242F");
            $("#btnTop").fadeIn();
        } else {
            $('.navbar').css("background-color", "transparent");
            $("#btnTop").fadeOut();
        }
    });

    $("#btnTop").on('click', function() {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });
        }
    });
    $(".navbar-nav .nav-item .nav-link").on("click", function() {
        $(".navbar-nav .nav-item .nav-link").removeClass("active");
        $(this).addClass("active");
    });
});