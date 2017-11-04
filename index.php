<?php
get_header();
get_header("nav");
?>

<div class="banner fixed-top">
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                get_gallery("57");
                foreach ($gallery as $key=>$img): ?>
                    <li data-target="#carouselControls" data-slide-to="<?php echo $key;?>" class="<?php echo ($key==0)?"active":"";?>"></li>
            <?php endforeach;?>
        </ol>
        <div class="carousel-inner">
            <?php
            get_gallery("57");
            foreach ($gallery as $key=>$img): ?>
                <div class="carousel-item <?php echo ($key==0)?"active":"";?>">
                    <img class="d-block w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
                </div>
            <?php endforeach;?>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <div class="mt-5">
        <div class="h3 text-center"><?php echo get_post("237")->post_title;?></div>
        <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("237")->post_excerpt;?></span></div>
        <div class="row">
            <?php
                $news_posts = get_posts("category=12&numberposts=4&order=desc");
                foreach ($news_posts as $n_post): ?>
                    <a href="<?php echo $n_post->guid;?>" class="d-block col-md-3 col-sm-2">
                        <div class="img-box">
                            <img class="img-top w-100" src="<?php echo get_characterized_img("$n_post->ID");?>" alt="<?php echo $n_post->post_title;?>">
                            <div class="img-body w-100 invisible">
                                <div class="img-text pl-md-2 w-100"><?php echo $n_post->post_title;?></div>
                            </div>
                        </div>
                    </a>
                <?php endforeach;?>
        </div>
    </div>


    <div class="product  mt-5">
        <div class="h3 text-center"><?php echo get_post("239")->post_title;?></div>
        <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("239")->post_excerpt;?></span></div>
        <nav class="product-menu index-p-menu">
            <ul class="nav navbar col-md-8 offset-md-2">
                <?php
                $product_menus=theme_nav_menu("product");
                foreach ($product_menus as $p_key=>$p_menu):?>
                    <li class="nav-item <?php echo ($p_key==0)?"active":"";?>" p_id="<?php echo $p_menu->id;?>">
                        <a class="nav-link d-block w-100 text-center" href="javascript:void(0);">
                            <img class="" width="45" src="<?php echo get_category_img("$p_menu->id");?>" alt="">
                            <div><?php echo $p_menu->name;?></div>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </nav>
        <div class="product-content">
            <?php
            $product_menus=theme_nav_menu("product");
            foreach ($product_menus as $key=>$p_menu):?>
            <div class="row <?php echo ($key==0)?"":"d-none";?>" p_cat_id="<?php echo $p_menu->id;?>">
               <?php $pro_id=$p_menu->id;
                $product_posts=get_posts("category=$pro_id&numberposts=8&order=desc");
                foreach ($product_posts as $p_post):?>
                    <div class="d-block col-md-3 col-sm-2">
                        <div class="product-box">
                            <div>
                                <a class="d-block" href="<?php echo $p_post->guid;?>"><img class="product-top w-100" src="<?php echo get_characterized_img("$p_post->ID");?>" alt=""></a>
                                <div class="text-center pt-2"><?php echo $p_post->post_title;?></div>
                            </div>
                            <div class="product-body invisible">
                                <h6 class="w-100 text-center mt-5"><a href="<?php echo $p_post->guid;?>"><?php echo $p_post->post_title;?></a></h6>
                                <div class="w-100 text-center pl-2 pr-2 font-size"><a href="<?php echo $p_post->guid;?>"><?php echo $p_post->post_excerpt;?></a></div>
                                <div class="mt-4 text-center">
                                    <a class="btn btn-sm btn-warning" href="<?php echo $p_post->guid;?>">查看详情</a>
                                    <a class="btn btn-sm btn-secondary" href="javascript:void(0);">预约体验</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <?php endforeach;?>

        </div>

        <div class="text-center">
            <a href="<?php echo home_url()."?cat=2";?>" class="btn btn-outline-dark mt-4 pl-4 pr-4">
                查看更多产品信息
            </a>
        </div>
    </div>




    <div class="case mt-5">
        <div class="h3 text-center"><?php echo get_post("241")->post_title;?></div>
        <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("241")->post_excerpt;?></span></div>
        <nav class="bespoke-menu">
            <ul class="nav navbar col-md-4 offset-md-4 col-sm-12">
                <?php
                    $bespoke_menus=theme_nav_menu("bespoke");
                    foreach ($bespoke_menus as $b_key=>$b_menu):?>
                        <li class="nav-item <?php echo ($b_key==0)?"active":"";?>" b_id="<?php echo $b_menu->id;?>">
                            <a class="nav-link" href="javascript:void(0);"><?php echo $b_menu->name;?></a>
                        </li>
                <?php endforeach;?>
            </ul>
        </nav>
        <form class="form-inline mt-3 mb-2">
            <div class="form-group col-md-2 col-sm-12">
                <select class="form-control form-control-lg col-12" name="province_id" id="input_province"></select>
            </div>
            <div class="form-group col-md-2 col-sm-12">
                <select class="form-control form-control-lg col-12" name="city_id" id="input_city"></select>
            </div>
            <div class="form-group col-md-3 col-sm-12">
                <input class="form-control form-control-lg col-12" type="text" name="username" placeholder="姓名" />
            </div>
            <div class="form-group col-md-3 col-sm-12">
                <input class="form-control form-control-lg col-12" type="text" name="phone" placeholder="电话" />
            </div>
            <div class="form-group col-md-2 col-sm-12">
                <input class="form-control form-control-lg col-12" type="submit" id="submit" placeholder="免费预约设计" />
            </div>
        </form>
        <div class="bespoke-content">
            <?php
            $bespoke_menus=theme_nav_menu("bespoke");
            foreach ($bespoke_menus as $key=>$b_menu):?>
                <div class="row <?php echo ($key==0)?"":"d-none";?>" b_post_id="<?php echo $b_menu->id;?>">
                 <?php get_gallery($b_menu->id);
                        foreach ($gallery as $img):?>
                        <a class="d-block col-md-3 col-sm-6 mt-2" href="<?php the_permalink("94");?>">
                            <div class="img-box">
                                <img class="w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
                                <div class="img-body invisible">
                                    <div class="img-text"><?php echo $img->excerpt;?></div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach;?>
                </div>
                <?php endforeach;?>

        </div>

        <div class="row mt-4">
            <div class="col-md-3 col-sm-6 mt-2">
                免费预约量尺
            </div>
            <div class="col-md-3 col-sm-6 mt-2">
                免费预约量尺
            </div>
            <div class="col-md-3 col-sm-6 mt-2">
                免费预约量尺
            </div>
            <div class="col-md-3 col-sm-6 mt-2">
                免费预约量尺
            </div>
        </div>
        <img class="w-100 mt-4 mb-5" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/index/index_bespoke.jpg" alt="">
        <div>
            <div class="h3 text-center"><?php echo get_post("248")->post_title;?></div>
            <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("248")->post_excerpt;?></span></div>
        </div>
        <div class="row">
            <?php
            $case_posts = get_posts("category=11&numberposts=4&order=desc");
            foreach ($case_posts as $c_post): ?>
                <a class="d-block col-md-4 col-sm-6 mt-2" href="<?php echo $c_post->guid;?>">
                    <div class="img-box">
                        <img class="w-100" src="<?php echo get_characterized_img("$c_post->ID");?>" alt="">
                        <div class="img-body invisible">
                            <div class="img-text"><?php echo $c_post->post_excerpt;?></div>
                        </div>
                    </div>
                </a>
            <?php endforeach;?>
        </div>
        <div class="text-center">
            <a href="<?php echo home_url()."cat=11";?>" class="btn btn-outline-dark mt-4 pl-4 pr-4">
                查看更多客户案例
            </a>
        </div>
    </div>





    <div class="store mt-3">
        <div class="h3 text-center"><?php echo get_post("250")->post_title;?></div>
        <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("250")->post_excerpt;?></span></div>
        <div class="row">
            <?php
            $store_posts = get_posts("category=16&numberposts=4&order=desc");
            foreach ($store_posts as $s_post): ?>
                <a class="d-block col-md-6 col-sm-6" href="<?php echo home_url()."?cat=16"?>">
                    <div class="img-box">
                        <img class="w-100" src="<?php echo get_characterized_img("$s_post->ID");?>" alt="">
                        <div class="img-body invisible">
                            <div class="img-text font-size-16"><?php echo $s_post->post_title;?></div>
                        </div>
                    </div>
                </a>
            <?php endforeach;?>
        </div>
        <div class="text-center mt-5 mb-4">
            <a href="<?php echo home_url()."?cat=16"?>" class="btn btn-outline-dark">
              查看更多店面信息
            </a>
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
            var username = $('input[name=username]').val();
            if(username==""){
                alert('请填写姓名!');
                return false;
            }
            var phone = $('input[name=phone]').val();
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
                    comment:"微定制------联系人："+username+" "+
                    "电话:"+phone+" "+
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
