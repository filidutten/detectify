$(document).ready(function(){

    $(".subnavbtn").click(function(){
      $(".subnav").toggleClass("open");
    });

    $(".hero, .container").click(function(){
      $(".subnav").removeClass("open");
    });

    $(".dropdown").click(function(){
      $(".dropdown-content").toggleClass("show");
    });

    $(".close-subnav").click(function(){
      $(".subnav").removeClass("open");
    });

    $('.mob-open').on('click', function() {
		$('html').toggleClass('show-menu');
        if ($(".subnav").hasClass("open")) {
            $(".subnav").removeClass("open");
        }
	} );

    $(".close-subnav").click(function(){
        $(".subnav").removeClass("open");
    });
});

$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        if ($(".subnav").hasClass("open")) {$(".subnav").toggleClass("open")}
        if ($(".dropdown-content").hasClass("show")) {$(".dropdown-content").toggleClass("show")}
    }
});

$(window).scroll(function() {
    if ($(document).scrollTop() > 20) {
        $('.navbar').addClass('scrolled');
    } else {
        $('.navbar').removeClass('scrolled');
    }
});
