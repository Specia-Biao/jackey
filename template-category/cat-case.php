<?php
get_header();
global $wp_query;
$ID= get_query_var('cat');

$cat=get_category($ID);
if ($cat->parent==4){
    $cat_Id=$ID;
}else{
    $cat_Id=$cat->parent;
}
?>
<?php get_header("nav"); ?>

<div class="">
    <div class="container clearfix">
        <div class="float-left mt-3">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb" style="font-size:12px;">
                    当前位置：
                    <li class="breadcrumb-item"><a href="/">首页</a></li>
                    <?php the_archive_title("<li class=\"breadcrumb-item active\" aria-current=\"page\">","</li>"); ?>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="clearfix" style="border-bottom:1px solid #e6e6e6;">
        <h4 class="float-left">空间</h4>
        <div class="float-left ml-4 case_search">
            <a class="mt-1" href="">全部</a>
            <a class=mt-1"" href="">卧室</a>
            <a class=mt-1"" href="">卧室</a>
            <a class=mt-1"" href="">卧室</a>
            <a class=mt-1"" href="">卧室</a>
            <a class=mt-1"" href="">卧室</a>
        </div>
    </div>
    <div class="clearfix mt-3 mb-4" style="border-bottom:1px solid #e6e6e6;">
        <h4 class="float-left">风格</h4>
        <div class="float-left ml-4 case_search">
            <a class="mt-1" href="">全部</a>
            <a class=mt-1"" href="">浪漫简欧</a>
            <a class=mt-1"" href="">自然田园</a>
            <a class=mt-1"" href="">卧室</a>
            <a class=mt-1"" href="">卧室</a>
            <a class=mt-1"" href="">卧室</a>
        </div>
    </div>


    <?php
        if(have_posts()):
        while(have_posts()):the_post();
    ?>
    <div class="row mb-4">
        <div class="col-md-6 col-sm-12">
            <img class="w-100" src="<?php echo get_characterized_img("$id");?>" alt="">
        </div>
        <div class="col-md-6 col-sm-12" style="background:#f8f8f8;">
            <h4><?php the_title();?></h4>
            <?php
            $tags=get_post_meta("$id","标签");
            if (!empty($tags)):?>
                <div class="pb-2" style="border-bottom:1px solid #e6e6e6;">
                    <span>标签</span>
                    <?php foreach ($tags as $tag):?>
                        <span style="padding: 3px 15px;font-size: 14px;background: #ffffff;margin: 0 5px;"><?php echo $tag;?></span>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <div>
                <h6 class="mt-3 mt-3">案例介绍</h6>
                <div class="text-left" style="color:#999;font-size: 14px;line-height: 26px;">
                    <?php the_excerpt();?>
                </div>
            </div>
            <div>
                <a class="btn btn-secondary" href="<?php the_permalink();?>">查看详情</a>
                <a class="btn btn-warning" href="/">免费预约</a>
            </div>
        </div>
    </div>
    <?php endwhile;endif;?>
</div>



<!--<nav aria-label="Page navigation example">-->
<!--    <ul class="pagination pagination-md justify-content-center">-->
<!--        <li class="page-item disabled">-->
<!--            <a class="page-link" href="#" tabindex="-1">上一页</a>-->
<!--        </li>-->
<!--        <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="#">下一页</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</nav>-->


<?php get_footer(); ?>
