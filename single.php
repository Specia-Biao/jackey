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
$news_cats=get_categories("child_of=15");
array_push($news,"15");
foreach ($news_cats as $news_cat){
    array_push($news,$news_cat->cat_ID);
}
//解决方案
//$reslove=[];
//$reslove_cats=get_categories("child_of=11");
//array_push($reslove,"11");
//foreach ($reslove_cats as $reslove_cat){
//    array_push($reslove,$reslove_cat->cat_ID);
//}


    if(in_category($product)){
	    include(TEMPLATEPATH . '/template-single/single-product.php');
	} else if(in_category($news)){
     include(TEMPLATEPATH . '/template-single/single-news.php');
    }
    else if(in_category($reslove)){
     include(TEMPLATEPATH . '/template-single/single-product.php');
    }
    else if(in_category("9")){
     include(TEMPLATEPATH . '/template-single/single-join.php');
    }
    else if(in_category("11")){
     include(TEMPLATEPATH . '/template-single/single-case.php');
    }
    else{
     include(TEMPLATEPATH . '/template-single/single-default.php');
    }


?>