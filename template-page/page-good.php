<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:好品质-更安全
 */

get_header();

$id=get_the_ID();

get_header("nav")?>

<div class="other_body">
    <div class="banner2">
        <ul>
            <li><img src="<?php echo get_characterized_img("$id");?>" alt="" /></li>
        </ul>
    </div>
    <div class="home_con42">
        <div class="w1200">
            <div class="home_tit ohome_tit">
                <h3 class="bt"><?php echo get_post("174")->post_title;?></h3>
                <?php echo get_post("174")->post_content;?>
            </div>
            <div class="home_div4">
                <ul class="clearfix">
                    <?php
                        get_array_img("174");
                        foreach ($gallery as $img): ?>
                            <li>
                                <img src="<?php echo $img->url;?>">
                                <p><?php echo $img->title;?></p>
                            </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="home_con43 ohome_div43 ahome_div43">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("184")->post_title;?></h3>
                <?php echo get_post("184")->post_content;?>
            </div>
            <div class="home_div4">
                <ul class="clearfix">
                    <?php
                    get_array_img("184");
                    foreach ($gallery as $img): ?>
                        <li>
                            <img src="<?php echo $img->url;?>">
                            <p id="chu1"><?php echo $img->title;?></p>
                            <p><?php echo $img->excerpt;?></p>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
<!--        <div class="chakan"><a href="">查看更多<img src="--><?php //echo get_bloginfo("stylesheet_directory", "display") ?><!--/assert/images/chakan.png" alt="" /></a></div>-->
    </div>
    <div class="home_con44 ohome_div44 ohome_div43">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("194")->post_title;?></h3>
                <?php echo get_post("194")->post_content;?>
            </div>
            <div class="home_div4">
                <ul class="clearfix">
                    <?php
                    get_array_img("194");
                    foreach ($gallery as $img): ?>
                        <li>
                            <img src="<?php echo $img->url;?>">
                            <p id="chu"><?php echo $img->title;?></p>
                            <p><?php echo $img->excerpt;?></p>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="home_con45 ohome_div45 ohome_div43">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("199")->post_title;?></h3>
                <?php echo get_post("199")->post_content;?>
            </div>
            <div class="home_div4">
                <ul class="clearfix">
                    <?php
                    get_array_img("199");
                    foreach ($gallery as $img): ?>
                        <li>
                            <img src="<?php echo $img->url;?>">
                            <p id="chu"><?php echo $img->title;?></p>
                            <p><?php echo $img->excerpt;?></p>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="home_con46 ohome_div46 ohome_div43">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("201")->post_title;?></h3>
                <?php echo get_post("201")->post_content;?>
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