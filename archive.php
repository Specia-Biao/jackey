


<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31
 * Time: 16:38
 */

//产品
$product=[];
$product_cats=get_categories("child_of=2");
array_push($product,"2");
foreach ($product_cats as $product_cat){
    array_push($product,$product_cat->cat_ID);
}
//新闻
$news=[];
$news_cats=get_categories("child_of=12");
array_push($news,"12");
foreach ($news_cats as $news_cat){
    array_push($news,$news_cat->cat_ID);
}



if(in_category($product)){
    include(TEMPLATEPATH.'/template-category/cat-product.php');
}
else if(in_category($case)){
    include(TEMPLATEPATH.'/template-category/cat-case.php');
}
else if(in_category($reslove)){
    include(TEMPLATEPATH.'/template-category/cat-reslove.php');
}
else if(in_category($news)){
    include(TEMPLATEPATH.'/template-category/cat-news.php');
}
else if(in_category("11")){
    include(TEMPLATEPATH.'/template-category/cat-case.php');
}
else if(in_category("16")){
    include(TEMPLATEPATH.'/template-category/cat-store.php');
}
else{
    include(TEMPLATEPATH.'/template-category/cat-default.php');
}




?>

