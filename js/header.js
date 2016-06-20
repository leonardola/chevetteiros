$(document).ready(function () {

    var type = window.location.hash.substr(1);
    $("li").removeClass('active');
    $("li."+type).addClass('active');


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