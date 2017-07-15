$(function(){
    var shrinkHeader = 300;
    $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
            $('nav').addClass('shrink');
        }
        else {
            $('nav').removeClass('shrink');
        }
    });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});

window.onscroll = function(){

    var parallax = $(".parallax"), speed = 0.2;

    parallax.each(function(){
        var windowYOffset = window.pageYOffset;
        var elBackgrounPos = "50% -" + (windowYOffset * speed) + "px";
        console.log(elBackgrounPos);
        $(this).css("background-position", elBackgrounPos);
    });
};
