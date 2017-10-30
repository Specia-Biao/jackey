<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 14:12
 */

get_header();
$id=get_the_ID();
$cats=get_the_category($id);
$catId=null;
foreach ($cats as $cat){
    if($cat->parent!=0){
        $catId=$cat->cat_ID;
    }
}
$cat=get_category($catId);
?>
<?php get_header("nav");?>
    <!--main start-->
    <div class="wbanner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assert/images/banner/serve.jpg);"></div>
    <div class="m_main">
        <div class="w1200">
            <div class="path">
                <em>当前位置：</em>
                <a href="/">首页</a><font>/</font>
                <a href="<?php echo home_url()."?cat=".$cat->cat_ID;?>"><?php echo $cat->cat_name;?></a><font>/</font>
                <span><?php the_title();?></span>
            </div>
        </div>
        <div class="bg_f6f6f6 ser_detail">
            <div class="w1200">
                <div class="ser_dtinfo abo_base">
                    <div class="abo_tit tc">
                        <h3><?php the_title();?></h3>
                    </div>
                    <div class="text_p">
                        <p></p>
                    </div>
                </div>
                <ul class="ser_dblist">
                    <?php echo get_post($id)->post_content;?>
                </ul>
            </div>
        </div>
    </div>
    <!--main end-->

<?php get_footer(); ?>