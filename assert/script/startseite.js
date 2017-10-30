$(function(){
    var sections = $(".banner");
    var slides = $(sections).length;
    var height = $(window).height();

    function init(){
        height = $(window).height();

        $(sections).height(height);
    }

    $(window).resize(init);
    init();


    function getSlide(){
        if($(window).height() + $(window).scrollTop() >= $(document).height())
            return (slides - 1);

        var slide = Math.ceil(($(window).scrollTop() / height) - 1);
        return (slide < 0?0:slide);
    }

    function scrollTo(y){
        $('html,body').animate({
            scrollTop: y
        }, 1000);
    }
})