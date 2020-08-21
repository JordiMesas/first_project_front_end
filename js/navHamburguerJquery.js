$(function () {
    $("nav div:nth-of-type(2)").hide();
    $("#hamburger").click(function () {
        $("nav div:nth-of-type(2)").slideToggle("down");
    });
    $("nav div:nth-of-type(2) a").click(function () {
        $("nav div:nth-of-type(2)").hide();
    });

});