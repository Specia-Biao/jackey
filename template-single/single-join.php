<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 14:12
 */

get_header();
get_header("nav");
?>

    <div class="border border-secondary border-top-0 border-left-0 border-right-0">
        <div class="container clearfix">
            <div class="float-md-left mt-3 d-sm-block d-none">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb" style="font-size:12px;">
                        当前位置：
                        <li class="breadcrumb-item"><a href="/">首页</a></li>
                        <li class="breadcrumb-item"><a href="<?php the_permalink("145");?>"><?php echo get_post("145")->post_title;?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                    </ol>
                </nav>
            </div>
            <div class="float-md-right float-sm-left mt-2">
                <nav class="mt-2 mb-2">
                    <ul class="nav-pills nav nav-justified">
                        <?php
                        $id=get_the_ID();
                        $menus=theme_nav_menu("join");
                        foreach ($menus as $menu):?>
                            <li class="nav-item ml-2"><a class="nav-link border border-primary <?php echo ($id==$menu->id)?"active":"";?>" href="<?php echo $menu->url;?>"><?php echo $menu->name;?></a></li>
                        <?php endforeach;?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <?php
        while(have_posts()):the_post(); ?>
       <div class="container mt-3">
            <div class="text-left">
                <?php the_content();?>
            </div>
       </div>
   <?php endwhile;?>

<?php get_footer(); ?>