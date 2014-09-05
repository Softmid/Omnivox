//Slider

$(document).ready(function(){
    $('.banner-slide').bxSlider({
    controls: false,
    pager:true,
    auto: true
  });
    

    $(".fancybox").fancybox({
        openEffect	: 'none',
        closeEffect	: 'none',
        nextEffect  : 'none',
        prevEffect  : 'none',
        padding     : 0,
        margin      : [20, 60, 20, 60] // Increase left/right margin
    });
});

    

