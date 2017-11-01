<?php
get_header();

get_header("nav"); ?>

<div class="border border-secondary border-top-0 border-left-0 border-right-0">
    <div class="container clearfix">
        <div class="float-left mt-3">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb" style="font-size:12px;">
                    当前位置：
                    <li class="breadcrumb-item"><a href="/">首页</a></li>
                    <?php the_archive_title("<li class=\"breadcrumb-item active\" aria-current=\"page\">","</li>"); ?>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="container mt-4">
    <h4 class="text-center">门店查询</h4>
    <h6 class="text-center">晒家分享 见证生活中美学</h6>
    <div class="mt-3">
        <form action="<?php the_permalink();?>" class="form-inline row">
            <div class="form-group col-md-4 col-sm-12">
                <select id="input_province" class="form-control w-100" name="" id=""></select>
            </div>
            <div class="form-group col-md-4 col-sm-12">
                <select id="input_city" class="form-control w-100" name="" id=""></select>
            </div>
            <div class="form-group col-md-4 col-sm-12">
                <button type="submit" class="btn btn-secondary w-100">Submit</button>
            </div>
        </form>
    </div>
</div>




<div class="container mt-5">
    <h3 class="text-center">钛马迪全国旗舰店</h3>
    <div class="text-center mb-4">意式经典，简约，彰显轻奢极致</div>
    <?php
        if(have_posts()):
        while(have_posts()):the_post();?>
    <div class="row mb-4">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <img class="card-img-top" src="<?php echo get_characterized_img("$id");?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?php the_title();?></h4>
                    <div class="card-text">
                        <a class="btn btn-warning" href="javascript:void(0);">免费预约体验</a>
                        <a class="btn btn-secondary" href="tel:<?php echo get_post_meta("$id","电话",true);?>">
                            <?php echo get_post_meta("$id","电话",true);?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;endif;?>
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





