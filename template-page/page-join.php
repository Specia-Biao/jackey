<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:品牌加盟
 */

get_header();

$id=get_the_ID();
get_header("nav");?>

<div class="border border-secondary border-top-0 border-left-0 border-right-0">
    <div class="container clearfix">
        <div class="float-left mt-3">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb" style="font-size:12px;">
                    当前位置：
                    <li class="breadcrumb-item"><a href="/">首页</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                </ol>
            </nav>
        </div>
        <div class="float-right mt-2">
            <nav class="">
                <ul class="navbar nav">
                    <?php
                    $menus=theme_nav_menu("join");
                    foreach ($menus as $menu):?>
                        <li class="nav-item ml-2"><a class="nav-link" href="<?php echo $menu->url;?>"><?php echo $menu->name;?></a></li>
                    <?php endforeach;?>
                </ul>
            </nav>
        </div>
    </div>
</div>


<div class="mt-3">
    <div class="container">
        <?php echo get_post("$id")->post_content; ?>
    </div>
</div>

<?php get_footer(); ?>