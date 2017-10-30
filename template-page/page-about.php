<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:关于安沁
 */

get_header();

$id = get_the_ID();
get_header("nav") ?>

<div class="about_body">
    <div class="about_con">
        <a name="about"></a><a name="28"></a>
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php the_title();?></h3>
                <div class="t"><?php echo the_excerpt();?></div>
            </div>
            <div class="text">
                <div class="t">
                    <?php echo get_post("$id")->post_content;?>
                </div>
                <a href="#" class="more goto_id" data-id="crafts"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/upload/about/about_more.png" alt=""/></a>
            </div>

            <?php
                $url=get_post_meta("$id","url",true);
                if($url): ?>
                    <a href="javascript:;" class="play-btn01 play_video_btn" video-data="<?php echo $url;?>">
                        <img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/upload/about/g_icon2.png"/>
                    </a>
            <?php endif;?>
        </div>
    </div>
    <div class="home_con4 about_con2"><a name="crafts"></a><a name="29"></a>
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("98")->post_title;?></h3>
                <p class="t"><?php echo get_post("98")->post_excerpt;?></p>
            </div>
            <div class="home_div4">
                <ul class="clearfix">
                    <?php get_array_img("98");
                    foreach ($gallery as $img): ?>
                        <li>
                            <a href="javascript:;" class="img">
                                <img src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>"/>
                            </a>
                            <div class="text"><a href="javascript:;" class="bt"><?php echo $img->title;?></a>
                                <p class="t"><?php echo $img->excerpt;?><br/>
                                </p>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <a href="javascript:void(0)" class="more chuangtu">查看更多厂图</a></div>
    </div>
    <div class="about_con3"><a name="trust"></a><a name="30"></a>
        <div class="w1200">
            <div class="about_div3">
                <dl class="clearfix">
                    <dt class="f-l"><img src="<?php echo get_characterized_img("103");?>" alt=""/></dt>
                    <dd class="f-r">
                        <h4><?php echo get_post("103")->post_excerpt;?></h4>
                        <h3><?php echo get_post("103")->post_title;?></h3>
                        <div class="t">
                            <?php echo get_post()->post_content;?>
                        </div>
                        <a href="#" class="more">了解更多</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="about_con3 about_con4"><a name="chairman"></a><a name="31"></a>
        <div class="w1200">
            <div class="about_div3">
                <dl class="clearfix">
                    <dt class="f-r"><img src="<?php echo get_characterized_img("107");?>" alt=""/></dt>
                    <dd class="f-l">
                        <h4><?php echo get_post("107")->post_title;?><i><?php echo get_post_meta("107","en".true);?></i></h4>
                        <h3><?php echo get_post("107")->post_excerpt;?></h3>
                        <div class="t">
                            <?php echo get_post("107")->post_content;?>
                        </div>
                </dl>
            </div>
        </div>
    </div>
    <div class="home_con6"><a name=""></a><a name="18"></a>
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_category("15")->cat_name;?></h3>
                <p class="t"><?php echo category_description("15");?></p>
            </div>
            <div class="home_div6">
                <ul class="clearfix">
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
            </div>
        </div>
    </div>

    <div class="tc_about">
        <div class="box"><span class="guanbi"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/upload/about/guanbi.png" alt=""/></span>
            <div class="tc_con">
                <div class="tc_img">
                    <?php
                        get_array_img("110");
                        foreach ($gallery as $img): ?>
                            <div><span><img src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>"/></span></div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <i></i>
    </div>
</div>



<?php get_footer(); ?>
<script type="text/javascript">
    $(".chuangtu").click(function () {
        $(".tc_about").show();
    });
    $(".tc_about .guanbi").click(function () {
        $(".tc_about").hide();
    });
    $('.tc_img').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
</script>

<script type="text/javascript">
    var fuc = document.querySelector('.fuchuang');
    var tanc = document.querySelector('.tchu');
    var num = 1;
    fuc.onclick = function () {
        if (num == 1) {
            this.style.right = 200 + 'px';
            tanc.style.right = 0 + 'px';
            tanc.style.top = 400 + 'px';
            num = num + 1;

        } else {
            this.style.right = 0 + 'px';
            tanc.style.right = -200 + 'px';
            num = num - 1;
        }
    }

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
</script>

