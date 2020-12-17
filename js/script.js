$(document).ready(function(){
    // hamberger toggle
    $(".hamberger").click(function(){
        $(".header__nav").slideToggle();
    });

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 200) {
            $("#body-header").addClass("header-fixed");
            $("#body-header header").removeClass("container");
        } else {
            $("#body-header header").addClass("container");
            $("#body-header").removeClass("header-fixed");
        }

        if(scroll >= 200){
          $("#fixed-button").removeClass("hide");
        } else {
          $("#fixed-button").addClass("hide");
        }
    });
})