$(document).ready(function(){
    
    if($(window).scrollTop() == 0){
        if(!$("#to-top").hasClass("to-bottom")){
            $("#to-top").addClass("to-bottom");
        }
    }else if($(window).scrollTop() > 0){
        if($("#to-top").hasClass("to-bottom")){
            $("#to-top").removeClass("to-bottom");
        }
    }
    $( window ).scroll(function() {
        if($(window).scrollTop() == 0){
            if($(".top-bar").hasClass("tb-fixed")){
                $(".top-bar").removeClass("tb-fixed");
            }
            if(!$("#to-top").hasClass("to-bottom")){
                $("#to-top").addClass("to-bottom");
            }
        }else if($(window).scrollTop() > 37){
            if(!$(".top-bar").hasClass("tb-fixed")){
                $(".top-bar").addClass("tb-fixed", false);
            }
        }else {
            if($("#to-top").hasClass("to-bottom")){
                $("#to-top").removeClass("to-bottom");
            }
        }
    });
    $("#to-top").click(function() {
        if($(window).scrollTop() == 0){
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }else {
            $("html, body").animate({ scrollTop: 0 }, 650);
        }
    });
    var list = $('.top-bar #list');
    $("#btn-lnk").on("click", function(){
        if($(this).hasClass("no-act")){
            $(this).removeClass('no-act');
            $(this).addClass('act');

            $(list).removeClass('d-none');
            $(list).addClass('d-block', 'slow');
        }else if($(this).hasClass("act")){
            $(this).removeClass('act');
            $(this).addClass('no-act');

            $(list).removeClass('d-block');
            $(list).addClass('d-none', 'slow');
        }
    });
});
