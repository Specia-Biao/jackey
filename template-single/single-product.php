<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/6
 * Time: 11:15
 */

get_header();
$id = get_the_ID();
$id1=get_the_ID();
$cats = get_the_category($id);
$catId = null;
foreach ($cats as $cat) {
    if ($cat->parent != 0) {
        $catId = $cat->cat_ID;
        break;
    }
}
$cat = get_category($catId); ?>
<?php get_header("nav"); ?>


<?php while(have_posts()):the_post(); ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="w-100">
                    <a href="<?php echo get_characterized_img("$id")?>"><img src="<?php echo get_characterized_img("$id")?>" alt="" rel="<?php echo get_characterized_img("$id")?>" class="jqzoom" /></a>
                </div>
                <ul class="nav navbar" id="thumblist">
                    <li class="tb-selected col img_thumb"><div class=""><a href="javascript:void(0);"><img src="images/01_small.jpg" mid="images/01_mid.jpg" big="images/01.jpg"></a></div></li>
                    <?php
                    get_gallery("$id");
                    foreach ($gallery as $img):?>
                        <li class="col img_thumb"><div class=""><a href="javascript:void(0);"><img class="w-100" src="<?php echo $img->url;?>" mid="<?php echo $img->url;?>" big="<?php echo $img->url;?>"></a></div></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="col-md-5 col-sm-12">
                <h4><?php the_title();?></h4>
                <div class="w-100"><?php the_excerpt();?></div>
                <div>分类：<a href="<?php echo home_url()."?cat=$catId";?>"><?php echo $cats[0]->cat_name;?></a></div>
                <div><?php echo get_post_meta("$id","产品描述",true);?></div>
                <div class="mt-4 mb-4">
                    <a class="btn btn-warning" href="/">联系我们</a>
                </div>
                <div>
                    <!-- JiaThis Button BEGIN -->
                    <div class="jiathis_style">
                        <a class="jiathis_button_qzone"></a>
                        <a class="jiathis_button_tsina"></a>
                        <a class="jiathis_button_tqq"></a>
                        <a class="jiathis_button_weixin"></a>
                        <a class="jiathis_button_renren"></a>
                        <a class="jiathis_button_xiaoyou"></a>
                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                        <a class="jiathis_counter_style"></a>
                    </div>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    <!-- JiaThis Button END -->
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h4 class="mb-4">产品详情</h4>
        <div class="product-detail">
            <?php the_content();?>
        </div>
    </div>
    <?php endwhile;?>


    <div class="container mt-4">
        <h4 class="text-center">您可能会感兴趣</h4>
        <div class="row">
            <?php
            $cat_ID=$cat->cat_ID;
            query_posts("cat=$cat_ID&order=desc&showposts=4");
            while (have_posts()) : the_post(); ?>
                <div class="col-md-3 col-sm-12">
                    <div><img width="w-100" src="<?php get_characterized_img("$id");?>" alt=""></div>
                    <div class="text-center"><?php the_title();?></div>
                </div>
            <?php endwhile;wp_reset_query(); ?>
            <div class="col-md-3 col-sm-12">
                <div><img src="<?php  ?>" alt=""></div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/script/jqzoom/jqzoom.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".jqzoom").imagezoom();
        $(".img_thumb").click(function(){
            //增加点击的li的class:tb-selected，去掉其他的tb-selecte
            $(this).addClass("tb-selected").siblings().removeClass("tb-selected");
            //赋值属性
            $(".jqzoom").attr('src',$(this).find("img").attr("mid"));
            $(".jqzoom").attr('rel',$(this).find("img").attr("big"));
        });
    });
</script>


