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

    /* Scroll Header */
    window.addEventListener('scroll', function () {
        activateMenuCurrent();
    });

    const sections = document.querySelectorAll('section[id]');
    function activateMenuCurrent() {
        const checkpoint = window.pageYOffset + (window.innerHeight / 8) * 4
        for (const section of sections) {
            const sectionTop = section.offsetTop
            const sectionHeight = section.offsetHeight
            const sectionId = section.getAttribute('id')
            const checkpointStart = checkpoint >= sectionTop
            const checkpointEnd = checkpoint <= sectionTop + sectionHeight
            if (checkpointStart && checkpointEnd) {
            document
                .querySelector('nav ul li a[href*=' + sectionId + ']')
                .classList.add('active')
            } else {
            document
                .querySelector('nav ul li a[href*=' + sectionId + ']')
                .classList.remove('active')
            }
        }
    }


});