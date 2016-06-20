$(function () {

    $(".biggerText").click(function () {
        var fontSize = $("p").css('font-size');

        fontSize = parseInt(fontSize);

        $("p").css('font-size', fontSize + 5 +"px");
    });

    $(".smallerText").click(function () {
        var fontSize = $("p").css('font-size');

        fontSize = parseInt(fontSize);

        $("p").css('font-size', fontSize - 5 +"px");
    });

    $(".originalText").click(function () {
        $("p").css('font-size', "14px");
    });
});