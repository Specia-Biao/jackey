<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:招商加盟
 */

get_header();

$id=get_the_ID();
get_header("nav");?>

<div class="merchants_body">
    <div class="banner2">
        <ul>
            <li> <img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/banner/banner.jpg" alt="" /> </li>
        </ul>
    </div>
    <div class="home_con41">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("117")->post_title;?></h3>
                <p class="t"><?php echo get_post("117")->post_excerpt;?></p>
            </div>
            <div class="home_div4">
                <ul class="clearfix">
                    <?php
                        get_array_img("117");
                        foreach ($gallery as $key=>$img): ?>
                            <li id="<?php echo "gj".++$key.$key;?>">
                                <h2><?php echo $img->title;?></h2>
                                <p><?php echo $img->excerpt;?></p>
                            </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="home_con61">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("125")->post_title;?></h3>
                <p class="t"><?php echo get_post("125")->post_excerpt;?></p>
            </div>
            <div class="home_div6">
                <ul class="clearfix">
                    <?php
                    query_posts( 'cat=15&order=desc&showposts=3&tag_id=20');
                    while (have_posts()) : the_post();$id=get_the_ID();$id=get_the_ID();?>
                        <li>
                            <a href="<?php the_permalink();?>" class="img">
                                <img src="<?php echo get_characterized_img("$id");?>" alt="<?php the_title();?>"/>
                            </a>
                        </li>
                    <?php endwhile;wp_reset_query();?>
                </ul>
            </div>
        </div>
    </div>
    <div class="home_con40">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("127")->post_title;?></h3>
                <p class="t"><?php echo get_post("127")->post_excerpt;?></p>
            </div>
            <div class="home_div400">
                <?php echo get_post("127")->post_content;?>
            </div>
            <div class="shouji"><img src="<?php echo get_characterized_img("127");?>"></div>
        </div>
    </div>
    <div class="home_con31">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("131")->post_title;?></h3>
                <p class="t"><?php echo get_post("131")->post_excerpt;?></p>
            </div>
            <div class="home_con3_quan">
                <?php echo get_post("131")->post_content;?>
            </div>
        </div>
    </div>
    <div class="home_con81">
        <div class="w1200">
            <div class="home_con8_1">
                <div class="home_tit">
                    <h3 class="bt"><?php echo get_post("136")->post_title;?></h3>
                    <p class="t"><?php echo get_post("136")->post_excerpt;?></p>
                </div>
                <img src="<?php echo get_characterized_img("136");?>">
                <div class="tj_list">
                   <?php echo  get_post("136")->post_content;?>
                </div>
            </div>
        </div>
    </div>
    <div class="home_con51">
        <div class="w1200">
            <div class="home_tit">
                <h3 class="bt"><?php echo get_post("142")->post_title;?></h3>
                <p class="t"><?php echo get_post("142")->post_excerpt;?></p>
            </div>
            <div class="home_div5">
                <?php
                    get_array_img("142");
                    foreach ($gallery as $key1=>$img):?>
                        <div class="home_text <?php echo "t".++$key1;?> <?php echo ($key1==1)?"cur":"";?>">
                            <div class="img i1 <?php echo "i".$key1;?>"></div>
                            <div class="bg"></div>
                            <div class="bt"><?php echo $img->title;?></div>
                            <div class="text">
                                <?php echo $img->excerpt;?>
                            </div>
                        </div>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


<script type="text/javascript">
    $(document).ready(function() {
        var time = 2000;
        var curr_li = $('.home_div5 .home_text');
        var nowindex = 0,maxindex=curr_li.length-1;
        var timer=setInterval(AutoPlay,time);
        function AutoPlay() {
            nowindex=nowindex+1>maxindex?0:nowindex+1;
            curr_li.eq(nowindex).addClass("cur").siblings().stop(true,true).removeClass("cur");
        }
    })
</script>
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