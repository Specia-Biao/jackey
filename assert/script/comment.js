

//首页

$(function(){

    $(function () { $("[data-toggle='tooltip']").tooltip(); });

    $("#home-menu li a").hover(function() {
        // this function is fired when the mouse is moved over
        $(".out",	this).stop().animate({'top':	'40px'},	250); // move down - hide
        $(".over",	this).stop().animate({'top':	'0px'},		250); // move down - show

    }, function() {
        // this function is fired when the mouse is moved off
        $(".out",	this).stop().animate({'top':	'0px'},		250); // move up - show
        $(".over",	this).stop().animate({'top':	'-40px'},	250); // move up - hide
    });


    var productBox=$(".product-box");
    productImgBox(productBox);
    function productImgBox(element){
        element.on("mousemove",function(){
            $(this).children(".product-body").removeClass("invisible");
            $(this).css("border","1px solid #ddd");
        });
        element.on("mouseout",function(){
            $(this).children(".product-body").addClass("invisible");
            $(this).css("border","1px solid transparent");
        });
    }

    var img_box=$(".img-box");
    imgBox(img_box);
    function imgBox(element){
        element.on("mousemove",function(){
            $(this).children(".img-body").removeClass("invisible");
        });
        element.on("mouseout",function(){
            $(this).children(".img-body").addClass("invisible");
        });
    }





    var indexProMenu=$(".index-p-menu");
    indexProMenu.on("click","ul li",function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var p_id=$(this).attr("p_id");
        var $productContent=$(".product-content .row");
        $productContent.each(function(){
            if (p_id === $(this).attr("p_cat_id")){
                $(this).removeClass("d-none");
                $(this).siblings().addClass("d-none");
            }
        });
    });
    var indexProMenu=$(".bespoke-menu");
    indexProMenu.on("click","ul li",function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var p_id=$(this).attr("b_id");
        var $productContent=$(".bespoke-content .row");
        $productContent.each(function(){
            if (p_id === $(this).attr("b_post_id")){
                $(this).removeClass("d-none");
                $(this).siblings().addClass("d-none");
            }
        });
    });

















})



