<?php

/*
 * 搜索
*/
get_header();
get_header("nav");
?>


<div class="abo_pro_wrap bg_f6f6f6">
    <div class="i_part_tit baseWidth">
        <h2>搜索结果</h2>
    </div>
    <ul class="clearfix">
        <?php if ( have_posts() ) : ?>
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="img zoom">
                            <?php
                            $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
                            $post_thumbnail_src = wp_get_attachment_image_src($post_thumbnail_id, 'Full'); ?>
                            <span style="background-image: url(<?php echo $post_thumbnail_src[0]; ?>);"></span>
                        </div>
                        <div class="text">
                            <p class="tover"><?php the_title(); ?></p>
                        </div>
                    </a>
                </li>
                <?php
            endwhile;
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :?>
            <div style="margin:0 auto;width: 250px;height: 300px;background:#eee;text-align:center;color: red;">未搜到产品</div>
        <?php endif; ?>
    </ul>
    <div class="pages tc">
    </div>
</div><!--main end-->


<?php get_footer(); ?>