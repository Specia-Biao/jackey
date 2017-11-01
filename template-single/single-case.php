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
$cat=get_category($cats[0]);
?>
<?php get_header("nav");?>
    <div class="border border-secondary border-top-0 border-left-0 border-right-0">
        <div class="container clearfix">
            <div class="float-left mt-3">
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


        <div class="text-center mt-5">
            <h6 class="text-center mb-3">预约体验</h6>
            <form action="" class="form-inline">
                <div class="form-group  mt-2 col-md-4 col-sm-12">
                    <input class="form-control form-control-lg w-100" type="text" placeholder="姓名">
                </div>
                <div class="form-group mt-2 col-md-4 col-sm-12">
                    <input class="form-control form-control-lg w-100" type="text" placeholder="电话">
                </div>
                <div class="form-group mt-2 col-md-4 col-sm-12">
                    <button class="btn btn-lg btn-secondary btn-block w-100">免费体验</button>
                </div>
            </form>
        </div>

    </div>








<?php get_footer();
$news_posts=get_posts("category=$cat_Id&order=asc&postshows=100");

?>