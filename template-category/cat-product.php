<?php
get_header();
get_header("nav"); ?>
    <div class="container">
        <nav class="mt-2">
            <ul class="nav navbar">
                <li><a href="">全部</a></li>
                <li><a href="">全部</a></li>
                <li><a href="">全部</a></li>
                <li><a href="">全部</a></li>
            </ul>
        </nav>
        <?php
        if(have_posts()):?>
        <div class="row mt-4">
            <?php
            while(have_posts()):the_post(); ?>
            <a class="d-block col-md-3 col-sm-6" href="<?php the_permalink();?>">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_characterized_img("$id");?>" alt="">
                    <div class="card-body">
                        <div class="card-title"><?php echo the_title();?></div>
                        <div class="card-text"><?php echo the_excerpt();?></div>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile;endif;?>
    </div>


<?php get_footer(); ?>


