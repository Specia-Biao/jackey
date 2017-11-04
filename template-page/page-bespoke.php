<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:微定制
 */

get_header();
$id=get_the_ID();
get_header("nav")?>

<div class="bespoke">
    <img class="w-100" src="<?php echo get_characterized_img($id);?>" alt="">

    <div class="container mt-3">
        <div class="row text-center">
            <?php
                get_gallery("98");
                foreach ($gallery as $img): ?>
                    <div class="col-md-2 col-sm-12 design-icon mt-1">
                        <img class="rounded" src="<?php echo $img->url?>" alt="<?php echo $img->title?>" />
                        <span><?php echo $img->title;?></span>
                    </div>
            <?php endforeach;?>
        </div>
        <div class="brand-1 mt-5">
            <div class="mt-4" style="background:#333;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container bespoke-form mt-5 pt-5">
        <h3 class="text-center"><?php echo get_post("105")->post_title;?></h3>
        <h6 class="text-center"><?php echo get_post("105")->post_conetnt;?></h6>
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form class="mt-5">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="name" placeholder="您的昵称">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="tel" placeholder="您的联系电话">
                    </div>
                    <div class="form-inline">
                        <select id="input_province" class="col-md-5 col-sm-12 form-control form-control-lg mt-2" name="province_id">
                        </select>
                        <select id="input_city" class="col-md-5 offset-md-2 col-sm-12 form-control form-control-lg mt-2" name="city_id">
                        </select>
                    </div>
                    <div class="form-group mt-4 mb-2">
                        <button id="submit" class="btn btn-dark form-control btn-lg">预约免费设计</button>
                    </div>
                    <div class="form-group mt-2 mb-5">
                        <p class="desgin-tips">您的个人信息将被严格保密。 经销商会与您进一步沟通。</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <?php get_gallery("105");foreach ($gallery as $img): ?>
                <div class="col-md-4 col-sm-12">
                    <img class="w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
                </div>
            <?php endforeach;?>
        </div>
        
        <div class="text-center mt-3 mb-3">
            <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/images/bespoke/dz_ys.jpg" alt="">
        </div>
    </div>


    <!--六大优势-->
    <div>
        <?php get_gallery("110");foreach ($gallery as $img):?>
            <img class="w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
        <?php endforeach;?>
    </div>


    <div class="container">
        <?php
        query_posts( "cat=7&order=asc");
        if(have_posts()):the_post();?>
            <h3 class="text-center mt-4"><?php the_title();?></h3>
            <h6 class="text-center mt-1"><?php the_excerpt();?></h6>
            <div class="row">
                <?php get_gallery("$id");foreach ($gallery as $img):?>
                <div class="col-md-4 col-sm-12">
                    <figure>
                        <img class="w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
                        <figcaption><?php echo $img->title;?></figcaption>
                    </figure>
                </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>


    <div class="mt-3 pt-3"  style="background:#f7f7f7">
        <div class="container">
            <h3 class="text-center"><?php echo get_post("115")->post_title;?></h3>
            <div class="row mt-5">
                <?php get_gallery("115");foreach ($gallery as $img): ?>
                    <div class="col-md-3 col-sm-12">
                        <figure class="card">
                            <img class="card-img-top w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
                            <figcation class="card-body">
                                <h5 class="card-title text-center"><?php echo $img->title;?></h5>
                                <p class="card-text" style="color: #a0a0a0;font-size: 12px;"><?php echo $img->excerpt;?></p>
                            </figcation>
                        </figure>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
















</div>





<?php get_footer(); ?>


<script type="text/javascript" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/script/city/pdata.js"></script>
<script type="text/javascript">
    $(function () {
        var html = "<option value=''>请选择</option>"; $("#input_city").append(html);
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
            var html = "<option value=''>请选择</option>";
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

<script>
    $(function () {
        $('#submit').click(function(e){
            e.preventDefault();
            submitCheck();
        });
        function submitCheck(){
            var username = $('input[name=name]').val();
            if(username==""){
                alert('请填写姓名!');
                return false;
            }
            var phone = $('input[name=tel]').val();
            if(phone==""){
                alert('请填写电话!');
                return false;
            }
            var province = $('select[name=province_id] option:selected').text();
            var city = $('select[name=city_id] option:selected').text();
            if(province==""){
                alert('请选择省!');
                return false;
            }if(city==""){
                alert('请选择城市!');
                return false;
            }

            var id="198";
            $.post("/wp-comments-post.php",
                {
                    author:username,
                    comment:"免费预约设计------你的昵称："+username+" "+
                    "联系电话:"+phone+" "+
                    "地址:"+province+" "+city+" ",
                    comment_post_ID:id,
                    comment_parent:0,
                },
                function(data,status){
                    alert("提交成功");
                });
        }
    });
</script>