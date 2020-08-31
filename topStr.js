//Вверх
$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() !== 0) {
            $('#topStr').fadeIn();
        } else {
            $('#topStr').fadeOut();
        }
    });
    $('#topStr').click(function() {
        $('body,html').animate({scrollTop:0},700);
    });
});