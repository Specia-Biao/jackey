

//首页

$(function(){
    var bool =true;
    var the;
    $("#header>li").hover(function () {
        $(this).find(".tit a").animate({top:"-100%"},200);
        $(this).find("ul").css("z-index",1);
        $(this).find("ul").animate({height:50},200);
    },function () {
        $(this).find(".tit a").animate({top:0},200);
        $(this).find("ul").animate({height:0},200);
        $(this).find("ul").css("z-index",-1);
    });
    $("#header>li>ul a").hover(function () {
        $(this).css("background","url(/images/r70.png)");
    },function () {
        $(this).css("background","url(/images/b70.png)");
    })


















})



