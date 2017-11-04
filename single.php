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
    if(in_category($product)){
	    include(TEMPLATEPATH . '/template-single/single-product.php');
	} else if(in_category("9")){
     include(TEMPLATEPATH . '/template-single/single-join.php');
    }
    else if(in_category("11")){
     include(TEMPLATEPATH . '/template-single/single-case.php');
    }
    else{
     include(TEMPLATEPATH . '/template-single/single-default.php');
    }


?>