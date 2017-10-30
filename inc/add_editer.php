<?php 

//添加编辑器 并把内容集成到自定义栏目中


$new_meta_boxes4 = array(
    "gallery" => array(
        "name" => "gallery",
        "std" => "",
        "title" => "输入框1"),
);

function new_meta_boxes4() {
    global $post, $new_meta_boxes4;
        $meta_box_value = get_post_meta($post->ID,"gallery", true);
	    echo '<input type="hidden" name="gallery_noncename" id="gallery_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
        echo wp_editor(get_post_meta($post->ID, "gallery", true),  "gallery", $settings = array('wpautop' =>  true,) );
}
function create_meta_box4() {
    global $theme_name;
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes4', '图集', 'new_meta_boxes4', 'post', 'normal', 'high' );
    }
}

function save_postdata4( $post_id ) {
    global $post, $new_meta_boxes4;
    foreach($new_meta_boxes4 as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }
  
        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        }
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }
        $data = $_POST[$meta_box['name']];
  
        if(get_post_meta($post_id, $meta_box['name']) == "")
            add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
            update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }
}
add_action('admin_menu', 'create_meta_box4');
add_action('save_post', 'save_postdata4');


?>
