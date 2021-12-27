$(document).ready(function(){
    $(window).scroll(function (event) {
        var sc = $(window).scrollTop();
        // console.log(sc);
        if(sc >= 100){
            $('.navbar').css("background-color","#1B242F");
        }else{
            $('.navbar').css("background-color","transparent");
        }
    });

})
$(".navbar-nav .nav-item .nav-link").on("click", function() {
    $(".navbar-nav .nav-item .nav-link").removeClass("active");
    $(this).addClass("active");
});