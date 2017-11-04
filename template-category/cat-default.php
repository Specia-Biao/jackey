<?php
get_header();
global $wp_query;
$cat_Id = get_query_var('cat');
$cat = get_category($cat_Id);
?>

<?php get_header("nav"); ?>
    <div class="container">
        <div class="text-center h1">404</div>
    </div>
<?php get_footer(); ?>

