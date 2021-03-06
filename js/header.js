$(document).ready(function () {

    var type = window.location.hash.substr(1);
    $("li").removeClass('active');

    if (type) {
        $("li."+type).addClass('active');
    }else{
        $("li.home").addClass('active');
    }



    $(".nav a").on("click", function () {
        $(".nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });

    $(".invertColorsButton").click(function (event) {
        event.preventDefault();
        event.stopPropagation();

        if($("html").hasClass("invertColors")){
            $("html").removeClass("invertColors");

        }else{
            $("html").addClass("invertColors");
        }

    });
});