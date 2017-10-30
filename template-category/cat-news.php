<?php
get_header();
global $wp_query;
$cat_Id = get_query_var('cat'); ?>
<?php get_header("nav"); ?>


<div class="news_body">
    <div class="news_banner">
        <div class="w1200">
            <?php
            query_posts( "cat=$cat_Idorder=desc&showposts=1");
            while (have_posts()) : the_post();?>
            <div class="data"><?php the_time("Y-m-n");?></div>
            <h2><?php the_title();?></h2>
            <div class="name"></div>
            <div class="t"><?php the_excerpt()?></div>
            <a href="<?php the_permalink();?>" class="more">了解更多</a></div>
            <?php endwhile;wp_reset_query();?>
    </div>
    <div class="gnews_div">
        <div class="w1220">
            <div class="gnews_text clearfix">
                <div class="left f-l">
                    <div class="tit_bt clearfix">
                        <div class="tit"><span>最新发布</span>Latest release</div>
                    </div>
                    <div class="gnews_con">
                        <ul class="clearfix" id="ajax_list">
                            <?php
                                query_posts( "cat=$cat_Id&order=desc&showposts=100&posts_per_page=5");
                                while (have_posts()) : the_post();?>
                                    <li>
                                        <a href="<?php the_permalink();?>" class="img">
                                            <img class="vcenter" src="<?php echo get_characterized_img("$id");?>" alt="<?php the_title();?>"/>
                                        </a>
                                        <div class="text"><a href="<?php the_permalink();?>" class="bt"><?php the_title();?></a>
                                            <div class="t"><?php the_excerpt();?></div>
                                            <div class="con_btn clearfix">
                                                <div><a href="<?php the_permalink();?>"><?php if(function_exists('the_views')) {the_views();} ?></a></div>
                                                <span><?php the_time("Y-m-d");?></span></div>
                                        </div>
                                    </li>
                                <?php endwhile;wp_reset_query();?>
                        </ul>
                    </div>
                </div>
                <div class="right f-r">
                    <div class="tit">文章分类</div>
                    <ul class="fx_con clearfix">
                        <?php
                            $news_cats=get_categories("child_of=15");
                            foreach ($news_cats as $news_cat): ?>
                                <li><a href="<?php echo home_url()."?cat=".$news_cat->cat_ID;?>"><?php echo $news_cat->cat_name;?></a></li>
                        <?php endforeach;?>
                    </ul>
                    <div class="tit">热门文章</div>
                    <ul class="wz_con clearfix" style="margin-bottom: 25px;">
                        <?php
                        query_posts( "cat=$cat_Id&order=comment&showposts=5");
                        while (have_posts()) : the_post();?>
                            <li>
                                <a href="<?php the_permalink();?>" class="img">
                                    <img class="vcenter" src="<?php echo get_characterized_img("$id");?>" alt="<?php the_title();?>"/></a>
                                <div class="text"><a href="<?php the_permalink();?>" class="bt"><?php the_title();?></a>
                                    <div class="con clearfix"><a href="<?php the_permalink();?>"><?php if(function_exists('the_views')) {the_views();} ?></a></a> <span><?php the_time("Y-m-d");?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile;wp_reset_query();?>
                    </ul>
                    <div class="tit">精选好文</div>
                    <ul class="jx_con clearfix">
                        <?php
                        query_posts( "cat=$cat_Id&tag_id=24");
                        while (have_posts()) : the_post();?>
                            <li>
                                <a href="<?php the_permalink();?>" class="bt"><?php the_title();?></a>
                                <div class="con clearfix"><a href="/news/291.html"><?php if(function_exists('the_views')) {the_views();} ?></a> <span><?php the_time("Y-m-d");?></span></div>
                            </li>
                        <?php endwhile;wp_reset_query();?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
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




















