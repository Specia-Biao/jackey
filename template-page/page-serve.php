<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:服务支持
 */

get_header();

$id=get_the_ID();

get_header("nav")?>

<div class="service_body">
    <div class="support_banner">
        <div class="w1200">
            <h1><?php the_excerpt();?></h1>
            <h2><?php echo get_post_meta("$id","en",true);?></h2>
            <a href="javascript:void(0)" class="more goto_id" data-id="logistics"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/upload/service/case2.png" alt="" /></a>
            <div class="support_t">
                <ul class="clearfix">
                    <li><a href="#" class="goto_id" data-id="logistics"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/upload/service/support_icon1.png" alt=""/></a></li>
                    <li><a href="#" class="goto_id" data-id="installation"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/upload/service/support_icon2.png" alt=""/></a></li>
                    <li><a href="#" class="goto_id" data-id="quality"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/upload/service/support_icon3.png" alt=""/></a></li>
                    <li><a href="#" class="goto_id" data-id="sales"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/upload/service/support_icon4.png" alt=""/></a></li>
                    <li><a href="#" class="goto_id" data-id="faq"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/upload/service/support_icon5.png" alt=""/></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="support_con" id="klps"><a name="logistics"></a><a name="23"></a>
        <div class="w1200">
            <dl class="clearfix">
                <dt class="f-l">
                    <h3><?php echo get_post("153")->post_title;?><i><?php echo get_post_meta("153","en",true);?></i></h3>
                    <h4><?php echo get_post("153")->post_excerpt;?></h4>
                    <div class="t">
                        <?php echo get_post("153")->post_content;?>
                    </div>
                </dt>
                <dd class="f-r"> <img src="<?php echo get_characterized_img("153");?>" alt="" /></dd>
            </dl>
        </div>
    </div>
    <div class="support_con support_con2"  id="azsg"><a name="installation"></a><a name="24"></a>
        <div class="w1200">
            <dl class="clearfix">
                <dt class="f-r">
                    <h3><?php echo get_post("157")->post_title;?></h3>
                    <h4><?php echo get_post("157")->post_excerpt;?></h4>
                    <div class="t">
                        <?php echo get_post("157")->post_content;?>
                    </div>
                <dd class="f-l"> <img src="<?php echo get_characterized_img("157");?>" alt="" /> </dd>
            </dl>
        </div>
    </div>
    <div class="home_con4 about_con2" id="pkgl"><a name="quality"></a><a name="25"></a>
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("159")->post_title;?></h3>
                <div class="t"><?php echo get_post("159")->post_excerpt;?></div>
            </div>
            <div class="home_div4">
                <ul class="clearfix">
                    <?php
                        get_array_img("159");
                        foreach ($gallery as $img):?>
                            <li>
                                <a href="javascript:void(0);" class="img">
                                    <img src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>"/>
                                </a>
                                <div class="text"> <a href="javascript:;" class="bt"><?php echo $img->title;?></a>
                                    <div class="t"><?php echo $img->excerpt;?></div>
                                </div>
                            </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="support_con3" id="shbz"><a name="sales"></a><a name="26"></a>
        <div class="w1200">
            <dl class="clearfix">
                <dt class="f-l"><img src="<?php echo get_characterized_img("164");?>" alt="" /> </dt>
                <dd class="f-r">
                    <h5><?php echo get_post_meta("164","en",true);?></h5>
                    <h4><?php echo get_post("164")->post_title;?></h4>
                    <h3><?php echo get_post("164")->post_excerpt;?></h3>
                    <div class="t">
                        <?php echo get_post("164")->post_content;?>
                    </div>
                </dd>
            </dl>
        </div>
    </div>
    <div class="support_con4" id="cjwt"><a name="faq"></a><a name="27"></a>
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("167")->post_title;?></h3>
                <p class="t"><?php echo get_post("167")->post_excerpt;?></p>
            </div>
            <div class="support_div clearfix">
                <div class="f-l">
                   <?php echo get_post("167")->post_content;?>
                </div>
                <div class="f-r"> <img src="<?php echo get_characterized_img("167");?>" alt="" /> </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
    var fuc = document.querySelector('.fuchuang');
    var tanc = document.querySelector('.tchu');
    var num = 1;
    fuc.onclick = function() {
        if(num == 1) {
            this.style.right = 0 + 'px';
            tanc.style.right = -200 + 'px';
            tanc.style.top = 400 + 'px';
            num = num + 1;

        }else{
            this.style.right = 200 + 'px';
            tanc.style.right = 0 + 'px';
            num = num - 1;
        }
    }

</script>
