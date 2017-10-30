<?php
get_header();
get_header("nav");

global $wp_query;
$ID= get_query_var('cat');
$cat=get_category($ID);
if ($cat->parent==11){
    $cat_Id=$ID;
}else{
    $cat_Id=$cat->parent;
}
?>
<?php the_archive_description("<div class='multi-column columns line-text'>","</div>");?>
<!--main start-->
<div class="solution_body">
    <div class="solutions_banner nybanner" style="background-image:url(<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/banner/banner.jpg)">
        <div class="w1220">
            <div class="img"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/banner/reslove_thumb_img<?php echo $ID;?>.jpg" alt=""/></div>
            <?php the_archive_title("<h3>","</h3>"); ?>
            <?php the_archive_description("<div class='t'>","</div>")?>
            <div class="menu_btn">
                <ul class="clearfix">
                    <ul class="clearfix">
                        <a href="<?php echo home_url()."?cat=".$cat_Id;?>">全部</a>
                        <?php
                        $cat_nav=get_categories("child_of=$cat_Id");
                        foreach ($cat_nav as $c_nav): ?>
                            <a href="<?php echo home_url()."?cat=$c_nav->cat_ID";?>"><?php echo $c_nav->name;?></a>
                        <?php endforeach;?>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="pro_div">
        <div class="w1220">
            <div class="tit">专属产品</div>
            <div class="name"></div>
            <ul class="zhuanshu clearfix">
                <?php
                if (have_posts()):
                    while(have_posts()):the_post();
                        if (has_tag( 'application' )) continue;
                        $post_id=get_the_ID();?>
                        <li>
                            <a href="<?php the_permalink();?>">
                                <div class="img"><img src="<?php echo get_characterized_img("$post_id");?>" alt="<?php the_title();?>"/></div>
                                <div class="text clearfix"><span style="text-align:center"><?php the_title();?></span></div>
                            </a>
                        </li>
                    <?php endwhile;endif; ?>
            </ul>
        </div>
    </div>
    <div class="tu_con">
        <?php
        query_posts( "cat=$ID&tag_id=22");
        while (have_posts()) : the_post();
            echo the_content();
        endwhile;wp_reset_query();?>
    </div>



    <div class="pro_div5">
        <div class="w1220">
            <div class="tit"><?php echo get_category("15")->cat_name;?></div>
            <div class="name"><?php echo category_description("15");?></div>
            <ul class="list clearfix">
                <?php
                query_posts( 'cat=15&order=desc&showposts=3');
                while (have_posts()) : the_post();$id=get_the_ID();?>
                    <li>
                        <a href="<?php the_permalink();?>" class="img">
                            <img src="<?php echo get_characterized_img("$id");?>" alt="<?php the_title();?>"/>
                        </a>
                        <div class="text">
                            <a href="<?php the_permalink();?>" class="bt"><?php the_title();?></a>
                            <span><?php the_time("Y-m-n");?></span>
                            <div class="t"><?php the_excerpt();?></div>
                        </div>
                    </li>
                <?php endwhile;wp_reset_query();?>
            </ul>
            <ul>
                <?php
                query_posts( 'cat=17&order=desc&showposts=6');
                while (have_posts()) : the_post();$id=get_the_ID();?>
                    <li class="main_li"><a href="<?php the_permalink();?>"><?php the_title()?></a> <span><?php the_time("Y-m-n");?></span></li>
                <?php endwhile;wp_reset_query();?>
            </ul>
            <div class="more_height"></div>
            <div class="more_center clearfix">
                <a href="<?php echo home_url()."?cat=15";?>" class="more">查看更多</a></div>
        </div>
    </div>
</div>


<!--main end-->

<?php get_footer(); ?>
<script type="text/javascript">
    $('.pro_con').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
    });

    $('.case-list').slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
    $(".case-div a.img").click(function () {
        var url = $(this).attr('href');// return false;

        if (url) {
            $.get(url, function (data) {
                $('#case-tc').html($(data).filter('#case-tc').html()).fadeIn();

                $('.case-t').slick({
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.xiaotu'
                });
                $('.xiaotu').slick({
                    vertical: true,
                    autoplay: false,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    focusOnSelect: true,
                    asNavFor: '.case-t',
                });
            });
        }

        return false;
    });
    $("#case-tc").on('click', '.guanbi', function () {
        $("#case-tc").fadeOut().html(' Loading... ');
        return false;
    });
</script>
<script type="text/javascript">
    var fuc = document.querySelector('.fuchuang');
    var tanc = document.querySelector('.tchu');
    var num = 1;
    fuc.onclick = function () {
        if (num == 1) {
            this.style.right = 0 + 'px';
            tanc.style.right = -200 + 'px';
            tanc.style.top = 400 + 'px';
            num = num + 1;

        } else {
            this.style.right = 200 + 'px';
            tanc.style.right = 0 + 'px';
            num = num - 1;
        }
    }

    var arr_img = [];
    var arr_height = [];
    $.each($('.tu_con img'), function (index, ele) {
        arr_img.push($(this).offset().top);
    })
    $.each($('.tu_con img'), function (index, ele) {
        arr_height.push($(this).height());
    })
    $(window).scroll(function () {

        var atop = $(document).scrollTop();
        console.log(arr_img[0])
        if (atop > arr_img[0] - arr_height[0]) {
            $('.solution_body .tu_con img').eq(0).addClass('opac1');
        }
        if (atop > arr_img[1] - arr_height[1]) {
            $('.solution_body .tu_con img').eq(1).addClass('opac1');
        }
        if (atop > arr_img[2] - arr_height[2]) {
            $('.solution_body .tu_con img').eq(2).addClass('opac1');
        }
        if (atop > arr_img[3] - arr_height[3]) {
            $('.solution_body .tu_con img').eq(3).addClass('opac1');
        }
        if (atop > arr_img[4] - arr_height[4]) {
            $('.solution_body .tu_con img').eq(4).addClass('opac1');
        }
        if (atop > arr_img[5] - arr_height[5]) {
            $('.solution_body .tu_con img').eq(5).addClass('opac1');
        }
        if (atop > arr_img[6] - arr_height[6]) {
            $('.solution_body .tu_con img').eq(6).addClass('opac1');
        }
        if (atop > arr_img[7] - arr_height[7]) {
            $('.solution_body .tu_con img').eq(7).addClass('opac1');
        }
        if (atop > arr_img[8] - arr_height[8]) {
            $('.solution_body .tu_con img').eq(8).addClass('opac1');
        }
        if (atop > arr_img[9] - arr_height[9]) {
            $('.solution_body .tu_con img').eq(9).addClass('opac1');
        }
        if (atop > arr_img[10] - arr_height[10]) {
            $('.solution_body .tu_con img').eq(10).addClass('opac1');
        }
    })

    var arr_img1 = [];
    var arr_height1 = [];
    $.each($('.ppq_con img'), function (index, ele) {
        arr_img1.push($(this).offset().top);
    })
    $.each($('.ppq_con img'), function (index, ele) {
        arr_height1.push($(this).height());
    })
    $(window).scroll(function () {

        var atop = $(document).scrollTop();
        console.log(arr_img[0])
        if (atop > arr_img1[0] - arr_height1[0]) {
            $('.solution_body .ppq_con img').eq(0).addClass('opac1');
        }
        if (atop > arr_img1[1] - arr_height1[1]) {
            $('.solution_body .ppq_con img').eq(1).addClass('opac1');
        }
        if (atop > arr_img1[2] - arr_height1[2]) {
            $('.solution_body .ppq_con img').eq(2).addClass('opac1');
        }
        if (atop > arr_img1[3] - arr_height1[3]) {
            $('.solution_body .ppq_con img').eq(3).addClass('opac1');
        }
        if (atop > arr_img1[4] - arr_height1[4]) {
            $('.solution_body .ppq_con img').eq(4).addClass('opac1');
        }
        if (atop > arr_img1[5] - arr_height1[5]) {
            $('.solution_body .ppq_con img').eq(5).addClass('opac1');
        }
        if (atop > arr_img1[6] - arr_height1[6]) {
            $('.solution_body .ppq_con img').eq(6).addClass('opac1');
        }
        if (atop > arr_img1[7] - arr_height1[7]) {
            $('.solution_body .ppq_con img').eq(7).addClass('opac1');
        }
        if (atop > arr_img1[8] - arr_height1[8]) {
            $('.solution_body .ppq_con img').eq(8).addClass('opac1');
        }
        if (atop > arr_img1[9] - arr_height1[9]) {
            $('.solution_body .ppq_con img').eq(9).addClass('opac1');
        }
        if (atop > arr_img1[10] - arr_height1[10]) {
            $('.solution_body .ppq_con img').eq(10).addClass('opac1');
        }
    })
</script>