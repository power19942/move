$(document).ready(function () {
   var height = window.innerHeight;
    $(".movie-header").css("height",height+"px");

    $(window).resize(function () {
        var height = window.innerHeight;
        $(".movie-header").css("height",height+"px");
    });

    //fancy box setup


    $(".fancybox-thumb").fancybox({
        prevEffect	: 'none',
        nextEffect	: 'none',
        helpers	: {
            title	: {
                type: 'outside'
            },
            thumbs	: {
                width	: 50,
                height	: 50
            }
        }
    });








});