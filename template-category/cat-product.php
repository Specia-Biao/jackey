<?php
get_header();
global $wp_query;
$ID= get_query_var('cat');

$cat=get_category($ID);
if ($cat->parent==4){
    $cat_Id=$ID;
}else{
    $cat_Id=$cat->parent;
}
?>
<?php get_header("nav"); ?>

<!--main start-->
<div class="product_body">
    <div class="nybanner" style="background-image:url(<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/upload/class/1494799068851851326.jpg)">
        <div class="w1220">
            <?php the_archive_title("<h3>","</h3>"); ?>
            <?php the_archive_description("<div class='t'>","</div>")?>
            <div class="menu_btn">
                <ul class="clearfix">
                    <a href="<?php echo home_url()."?cat=".$cat_Id;?>">全部</a>
                    <?php
                        $cat_nav=get_categories("child_of=$cat_Id");
                        foreach ($cat_nav as $c_nav): ?>
                            <a href="<?php echo home_url()."?cat=$c_nav->cat_ID";?>"><?php echo $c_nav->name;?></a>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="pro_div">
        <div class="w1220">
            <ul class="clearfix">
                <?php
                    if (have_posts()):
                    while(have_posts()):the_post();
                    if (has_tag( 'application' )) continue;
                    $post_id=get_the_ID();?>
                        <li>
                            <a href="<?php the_permalink();?>">
                                <div class="img"><img src="<?php echo get_characterized_img("$post_id");?>" alt="<?php the_title();?>"/></div>
                                <div class="text clearfix"><span><?php the_title();?></span> <em><?php the_title();?></em></div>
                            </a>
                        </li>
                <?php endwhile;endif; ?>
            </ul>
        </div>
    </div>
    <div class="pro_div2"><a href="#"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/images/pro_bg.jpg" alt=""/></a></div>
    <div class="pro_div3">
        <div class="w1220">
            <div class="tit"><?php echo get_post("229")->post_title;?></div>
            <div class="name"><?php echo get_post("229")->post_content;?>
            </div>
        </div>
        <div class="pro_con clearfix">
            <?php
                get_array_img("229");
                foreach ($gallery as $img): ?>
                    <div>
                        <div class="text">
                            <div class="img"><img src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>"/></div>
                            <p class="t"><?php echo $img->title;?></p>
                        </div>
                    </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="pro_div4">
        <div class="w1220">
            <div class="tit">应用场所</div>
            <ul class="clearfix">
                <?php
                query_posts( "cat=$ID&tag_id=22");
                while (have_posts()) : the_post();
                    $id=get_the_ID();
                    get_array_img("$id");
                    foreach ($gallery as $key=>$img):$key++;?>
                        <?php if ($key>3):?>
                            <li class="li4 li2">
                                <a href="javascript:;">
                                    <div class="img">
                                        <img src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>"/>
                                    </div>
                                    <div class="<?php echo (($key%5==1) && ($key==6))?"text1 text2":"text"?>">
                                        <?php if ($key%5==1):?>
                                            <div class="bt"></div>
                                        <?php endif;?>
                                        <div class="name"><?php echo $img->title;?></div>
                                    </div>
                                </a>
                            </li>
                        <?php else:?>
                            <li class="<?php echo "li".$key;?>">
                                <a href="javascript:;">
                                    <div class="img">
                                        <img src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>"/>
                                    </div>
                                    <div class="<?php echo ($key%5==1)?"text1":"text"?>">
                                        <?php if ($key%5==1):?>
                                            <div class="bt"></div>
                                        <?php endif;?>
                                        <div class="name"><?php echo $img->title;?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endwhile;wp_reset_query();?>
            </ul>
        </div>
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

    var atop = $('.pro_div2').offset().top;
    $(window).scroll(function () {

        var ptop = $(document).scrollTop();
        if (ptop > atop - 642) {
            $('.product_body .pro_div2').addClass('opac1');
        }
        if (ptop > atop - 642 + 624) {
            $('.product_body .pro_div3 .w1220').addClass('opac1');
        }
        if (ptop > atop - 642 + 624 + 100) {
            $('.product_body .pro_div3 .w1220').addClass('opac1');
            $('.product_body .pro_div3 .pro_con').addClass('opac1');
        }
        if (ptop > atop - 642 + 624 + 736) {
            $('.product_body .pro_div4 .tit').addClass('opac1');
            $('.product_body .pro_div4').addClass('opac1');
            setTimeout(pfun, 800)

            function pfun() {
                $('.product_body .pro_div4 ul').addClass('opac1');
            }
        }
        if (ptop > atop - 642 + 624 + 736 + 638) {
            $('.product_body .pro_div5 .tit,.product_body .pro_div5 .name').addClass('opac1');
            setTimeout(pfun, 800)

            function pfun() {
                $('.product_body .pro_div5 ul').addClass('opac1');

            }
        }
        if (ptop > atop - 642 + 624 + 736 + 1038) {
            $('.product_body .pro_div5 .main_li').addClass('opac1');
            $('.product_body .pro_div5 .more_center').addClass('opac1');
        }
    })
</script>

















