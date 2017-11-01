<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 * Template Name:云设计
 */

get_header();
$id=get_the_ID();
get_header("nav")?>

<div class="cloud">
    <img class="w-100" src="<?php echo get_characterized_img($id);?>" alt="">

    <div class="container mt-5">
        <div class="text-center">
            <h4 class="text-center"><?php echo get_post("134")->post_title;?></h4>
            <h4 class="text-center"><?php echo get_post("134")->post_content;?></h4>
            <div class="text-center"><img src="<?php echo get_characterized_img("134");?>" alt=""></div>
            <h4 class="text-center mt-2 mb-2" style="color: #cbaa43;"><?php echo get_post("134")->post_excerpt;?></h4>
        </div>
        <div class="cloud-1 mt-5">
           <h3>与我们取得联系</h3>
            <p>GET IN TOUCH WITH US</p>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <form action="">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="公司">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="姓名">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="手机">
                        </div>
                        <div class="form-group">
                            <button class="col-md-12 col-sm-12 btn btn-primary btn-lg">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 mb-4">
        <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/cloud/cloud1.jpg" alt="">
    </div>


    <div class="container">
        <h3 class="text-center"><?php echo get_post("139")->post_title;?></h3>
        <h6 class="text-center"><?php echo get_post("139")->post_excerpt;?></h6>
        <div class="text-center"><img src="<?php echo get_characterized_img("139");?>" alt=""></div>
        <div class="row mt-4">
            <?php
                get_gallery("139");
                foreach($gallery as $img): ?>
                    <div class="col-md-4 col-sm-12 mt-2">
                        <img class="w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
                    </div>
            <?php endforeach;?>
        </div>
        <div class="text-center mt-4 mb-4">
            <button class="btn btn-outline-dark btn-lg">查看更多作品</button>
        </div>
    </div>

















</div>





<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/script/city/pdata.js"></script>
<script type="text/javascript">
    $(function () {
        var html = "<option value=''>== 请选择 ==</option>"; $("#input_city").append(html);
        $.each(pdata,function(idx,item){
            if (parseInt(item.level) == 0) {
                html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
            }
        });
        $("#input_province").append(html);

        $("#input_province").change(function(){
            if ($(this).val() == "") return;
            $("#input_city option").remove();
            var code = $(this).find("option:selected").attr("exid");
            code = code.substring(0,2);
            var html = "<option value=''>== 请选择 ==</option>";
            $("#input_area").append(html);
            $.each(pdata,function(idx,item){
                if (parseInt(item.level) == 1 && code == item.code.substring(0,2)) {
                    html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
                }
            });
            $("#input_city").append(html);
        });
        //绑定
        $("#input_province").val("广东省");
        $("#input_province").change();
        $("#input_city").val("深圳市");
    });
</script>

