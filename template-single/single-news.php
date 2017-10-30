<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 14:12
 */

get_header();
$id = get_the_ID();
$mian_cats = get_the_category($id);
$catId = null;
foreach ($mian_cats as $cat) {
    if ($cat->parent != 0) {
        $catId = $cat->cat_ID;
        break;
    }
}
$main_cat = get_category($catId);
$parent = get_category($main_cat->parent); ?>

<?php get_header("nav"); ?>
<!--main start-->

<div class="news_body news_info_body">
    <div class="gnews_div">
        <div class="w1220">
            <div class="gnews_text clearfix">
                <div class="left f-l">
                    <div class="container">
                        <h1><?php the_title(); ?></h1>
                        <div class="data clearfix">
                            <div class="da"><span>时间: <?php the_time("Y-m-d"); ?></span>
                                <span>分类：<?php echo get_category($catId)->cat_name;?></span>
                                <span><?php if (function_exists('the_views')) {
                                        the_views();
                                    } ?></span></div>
                            <div class="fx"><span>分享到：</span>
                                <div>
                                    <!-- JiaThis Button BEGIN -->
                                    <div class="jiathis_style">
                                        <a class="jiathis_button_qzone"></a>
                                        <a class="jiathis_button_tsina"></a>
                                        <a class="jiathis_button_tqq"></a>
                                        <a class="jiathis_button_weixin"></a>
                                        <a class="jiathis_button_renren"></a>
                                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                        <a class="jiathis_counter_style"></a>
                                    </div>
                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                                    <!-- JiaThis Button END -->
                                </div>
                            </div>
                        </div>
                        <div class="g_newstop">
                            <p class="t"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="text_con">
                            <div class="t">
                                <?php echo get_post($id)->post_content;?>
                            </div>
                        </div>
                        <div class="w"> 未经允许不得转载：<?php echo bloginfo("name");?></div>
                        <div class="fanhui">
                            <ul class="clearfix">
                                <?php
                                $categories = get_the_category();
                                $categoryIDS = array();
                                foreach ($categories as $category) {
                                    array_push($categoryIDS, $category->term_id);
                                }
                                $categoryIDS = implode(",", $categoryIDS); ?>
                                <li>
                                    <?php if (get_previous_post($categoryIDS)) { previous_post_link('<div class="bt">上一篇:</div> <div class="t">%link</div>','%title',true);} else { echo "<div class=\"bt\">上一篇:</div><div class='t'>已是最后的新闻</div>";} ?>
                                </li>
                                <li>
                                    <?php if (get_next_post($categoryIDS)) { next_post_link('<div  class="bt">下一篇:</div> <div class="t">%link</div>','%title',true);} else { echo "<div class=\"bt\">上一篇:</div><div class='t'>已是最新新闻</div>";} ?>
                                </li>
                            </ul>
                        </div>
                        <div class="rmtj_con">
                            <div class="tit"><span>热门推荐</span>Hot Recommended</div>
                            <ul class="tj_con clearfix">
                                <?php
                                query_posts( "cat=$cat_Id&order=desc&showposts=3&tag_id=25");
                                while (have_posts()) : the_post();?>
                                    <li>
                                        <a href="<?php the_permalink();?>">
                                            <img class="vcenter" src="<?php echo get_characterized_img("$id");?>" alt="<?php the_title();?>"/>
                                            <div class="bt"><?php the_title();?></div>
                                        </a>
                                    </li>
                                <?php endwhile;wp_reset_query();?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right f-r">
                    <div class="tit">文章分类</div>
                    <ul class="fx_con clearfix">
                        <?php
                        $news_cats = get_categories("child_of=15");
                        foreach ($news_cats as $news_cat): ?>
                            <li>
                                <a href="<?php echo home_url() . "?cat=" . $news_cat->cat_ID; ?>"><?php echo $news_cat->cat_name; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tit">热门文章</div>
                    <ul class="wz_con clearfix" style="margin-bottom: 25px;">
                        <?php
                        query_posts("cat=$catId&order=comment&showposts=5");
                        while (have_posts()) : the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <img class="vcenter" src="<?php echo get_characterized_img("$id"); ?>" alt="<?php the_title(); ?>"/></a>
                                <div class="text">
                                    <a href="<?php the_permalink(); ?>" class="bt"><?php the_title(); ?></a>
                                    <div class="con clearfix">
                                        <a href="<?php the_permalink(); ?>"><?php if (function_exists('the_views')) {
                                                the_views();
                                            } ?>
                                        </a>
                                        </a>
                                        <span><?php the_time("Y-m-d"); ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    </ul>
                    <div class="tit">精选好文</div>
                    <ul class="jx_con clearfix">
                        <?php
                        query_posts("cat=$cat_Id&tag_id=24");
                        while (have_posts()) : the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="bt"><?php the_title(); ?></a>
                                <div class="con clearfix">
                                    <a href="/news/291.html"><?php if (function_exists('the_views')) {
                                            the_views();
                                        } ?></a> <span><?php the_time("Y-m-d"); ?></span></div>
                            </li>
                        <?php endwhile;
                        wp_reset_query(); ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


<!--main end-->
<?php
get_footer();
?>
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

