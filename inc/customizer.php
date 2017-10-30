<?php

/**
 * 获取文章页面的特色图像
 */
function get_characterized_img($post_id){
    $attachment_id = get_post_thumbnail_id( $post_id );
    $characterized_img = wp_get_attachment_image_src($attachment_id,'Full');
    return $characterized_img[0];
}
add_action( 'get_characterized_img', 'get_characterized_img');


//获取图集数组
class gallery{
    public $ID;
    public $title;
    public $excerpt;
    public $url;
}
function img_shortcode($attr){
    $img_id=$attr["ids"];
    $img_array=array();
    $img_ids=explode(",",$img_id);
    foreach ($img_ids as $img_id){
        $item=new gallery();
        $item->ID=$img_id;
        $img=get_post($img_id);
        $item->excerpt=$img->post_excerpt;
        $item->title=$img->post_title;
        $item->url=wp_get_attachment_image_src( $img->ID, 'full')[0];
        $img_array[]=$item;
    }
    global $gallery;
    $gallery=$img_array;
}
add_action( 'img_shortcode', 'img_shortcode');

function get_gallery($post_id){
    $img_shortcode = get_post_meta("$post_id", "gallery");
    do_shortcode($img_shortcode[0]);
}
add_action( 'get_gallery', 'get_gallery');






/**
 * 自定义菜单
 * 获取菜单
 */
class menu{
    public $level;//菜单所在的层数
    public $pid;//父菜单的菜单id
    public $order;//排序序号
    public $type;//菜单所指向对象的类型
    public $id;//菜单所指向对象的id
    public $nav_id;//菜单的id
    public $url;//菜单指向对象的url
    public $name;//菜单所显示的标题
    public $description;// 显示分类描述
    public $submenu=array();//子菜单
}

function theme_nav_menu($nav_location){
    $nav_id= get_nav_menu_locations()[$nav_location];
    $nav_items=wp_get_nav_menu_items($nav_id);
    $maxlevel=0;
    $re1=array();
    $re_bylevel=array();
    foreach ($nav_items as $navitem){
        $item=new menu();
        if($navitem->menu_item_parent==0){
            $item->level=0;
            $item->pid=0;
            $item->order=$navitem->menu_order;
            $item->type=$navitem->object;
            $item->id=$navitem->object_id;
            $item->nav_id=$navitem->ID;
            $item->url=$navitem->url;
            $item->name=$navitem->title;
            $item->description=$navitem->description;
            $re1[$navitem->ID]=$item;
        }else{
            $parentitem=$navitem->menu_item_parent;
            $level=$re1[$parentitem]->level+1;
            if($level>$maxlevel){
                $maxlevel=$level;
            }
            $item->level=$level;
            $item->pid=$parentitem;
            $item->order=$navitem->menu_order;
            $item->type=$navitem->object;
            $item->id=$navitem->object_id;
            $item->nav_id=$navitem->ID;
            $item->url=$navitem->url;
            $item->name=$navitem->title;
            $item->description=$navitem->description;
            $re1[$navitem->ID]=$item;
        }
    }
    for($n=0;$n<($maxlevel+1);$n++){
        $re_bylevel[$n]=array();
    }
    foreach ($re1 as $navitem){
        array_push($re_bylevel[$navitem->level],$navitem);
    }
    while($maxlevel>-1){
        $level=$re_bylevel[$maxlevel];
        foreach ($level as $litem){
            $pid=$litem->pid;
            if($maxlevel!=0){
                foreach ($re_bylevel[$maxlevel-1] as $plitem){
                    if($plitem->nav_id==$pid){
                        array_push($plitem->submenu,$litem);
                    }
                }
            }
        }
        $maxlevel--;
    }
    return $re_bylevel[0];
}
add_action( 'theme_nav_menu','theme_nav_menu');



/**
 * 调用插件
 * 获取分类图像
 *
 */
function get_category_img($post_id){
    if (function_exists('z_taxonomy_image_url')) {
        return z_taxonomy_image_url("$post_id");
    };
}
?>
