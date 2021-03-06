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


    <div class="border border-secondary border-top-0 border-left-0 border-right-0">
        <div class="container clearfix">
            <div class="float-md-left mt-3 d-sm-block d-none">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb" style="font-size:12px;">
                        当前位置：
                        <li class="breadcrumb-item"><a href="/">首页</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo home_url()."?cat=".$cat->cat_ID;?>"><?php echo $cat->cat_name;?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="container">
        <?php
        while(have_posts()):the_post(); ?>
            <div class="mt-4 text-center">
                <h4><?php the_title();?></h4>
                <span>时间：<?php echo the_time("Y年m月d日");?></span>
            </div>
            <div class="mt-4">
                <?php the_content();?>
            </div>
        <?php endwhile;?>
    </div>








<?php get_footer(); ?>