<?php
get_header();
global $wp_query;
$cat_Id = get_query_var('cat');
?>
<?php get_header("nav"); ?>


<div class="border border-secondary border-top-0 border-left-0 border-right-0">
    <div class="container clearfix">
        <div class="float-md-left mt-3 d-sm-block d-none">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb" style="font-size:12px;">
                    当前位置：
                    <li class="breadcrumb-item"><a href="/">首页</a></li>
                    <?php the_archive_title("<li class=\"breadcrumb-item active\" aria-current=\"page\">","</li>"); ?>
                </ol>
            </nav>
        </div>
        <div class="float-md-right float-sm-left mt-2">
            <nav class="mt-2 mb-2">
                <ul class="nav-pills nav nav-justified">
                    <?php
                    $menus=theme_nav_menu("news");
                    foreach ($menus as $menu):?>
                        <li class="nav-item ml-2"><a class="nav-link border border-primary <?php echo ($cat_Id==$menu->id)?"active":"";?>" href="<?php echo $menu->url;?>"><?php echo $menu->name;?></a></li>
                    <?php endforeach;?>
                </ul>
            </nav>
        </div>
    </div>
</div>



    <?php
        if (have_posts()):;
        while(have_posts()):the_post();
    ?>
    <div class="container">
        <div class="yellow">
            <span style="font-size:60px"><?php the_time("d");?></span>
            <span><?php the_time("Y-m");?></span>
        </div>
        <div class="row" style="background:#f8f8f8;">
            <div class="col-md-6"><img class="w-100" src="<?php echo get_characterized_img($id);?>" alt=""></div>
            <div class="col-md-6 pt-4">
                <h4><?php the_title();?></h4>
                <div class="excerpt-text"><?php the_excerpt();?></div>
                <div class="col-md-4 col-sm-12 mb-1">
                    <a class="btn btn-danger btn-block" href="<?php the_permalink();?>">查看详情</a>
                </div>

            </div>
        </div>

    </div>
    <?php endwhile;endif;?>



<?php get_footer(); ?>



















