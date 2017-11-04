<?php
get_header();
get_header("nav");

global $wp_query;
$cat_Id = get_query_var('cat');

?>
    <div class="container">
        <nav class="mt-2 product-menu">
            <ul class="nav navbar col-md-8 offset-md-2">
                <?php
                    $product_menus=theme_nav_menu("product");
                    foreach ($product_menus as $p_menu):?>
                        <li class="nav-item <?php echo ($cat_Id==$p_menu->id)?"active":"";?>">
                            <a class="nav-link d-block w-100 text-center" href="<?php echo $p_menu->url;?>">
                                <img class="" width="45" src="<?php echo get_category_img("$p_menu->id");?>" alt="">
                                <div><?php echo $p_menu->name;?></div>
                            </a>
                        </li>
                    <?php endforeach;?>
            </ul>
        </nav>
        <?php
        if(have_posts()):?>
        <div class="row mt-4">
            <?php
            while(have_posts()):the_post(); ?>
            <div class="d-block col-md-3 col-sm-6" href="<?php the_permalink();?>">
                <div class="product-box">
                    <div>
                        <a class="d-block" href=""><img class="product-top w-100" src="<?php echo get_characterized_img("$id");?>" alt="<?php the_title();?>"></a>
                        <div class="text-center pt-2"><?php the_title();?></div>
                    </div>
                    <div class="product-body invisible">
                        <h6 class="w-100 text-center mt-5"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                        <div class="w-100 text-center pl-2 pr-2 font-size"><a href="<?php the_permalink();?>"><?php the_excerpt();?></a></div>
                        <div class="mt-4 text-center">
                            <a class="btn btn-sm btn-warning" href="<?php the_permalink();?>">查看详情</a>
                            <a class="btn btn-sm btn-secondary" href="javascript:void(0);">预约体验</a>
                        </div>
                    </div>
                </div>
            </div>
                <?php endwhile;?>
        </div>
        <?php endif;?>
    </div>


<?php get_footer(); ?>


