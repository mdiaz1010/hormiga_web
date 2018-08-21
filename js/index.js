jQuery(document).ready(function($) {
    $('.ini').addClass('active');

    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 500);
                return false;
            }
        }
    });


    
    $(".ini").click(function(event) {
        $('.nav-link').removeClass('active');
        $('.ini').addClass('active');
    });
    $(".nos").click(function(event) {
        $('.nav-link').removeClass('active');
        $('.nos').addClass('active');
    });
    $(".con").click(function(event) {
        $('.nav-link').removeClass('active');
        $('.con').addClass('active');
    });
    $(".ben").click(function(event) {
        $('.nav-link').removeClass('active');
        $('.ben').addClass('active');
    });
    $(".mov").click(function(event) {
        $('.nav-link').removeClass('active');
        $('.mov').addClass('active');
    });
    $(".rec").click(function(event) {
        $('.nav-link').removeClass('active');
        $('.rec').addClass('active');
    });
    $(".ubi").click(function(event) {
        $('.nav-link').removeClass('active');
        $('.ubi').addClass('active');
    });
});