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
    <div class="h3 text-center"><?php echo get_post("231")->post_title;?></div>
    <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("231")->post_excerpt;?></span></div>
    <div class="mt-3">
        <form action="<?php the_permalink();?>" class="form-inline row">
            <div class="form-group col-md-4 col-sm-12">
                <select id="input_province" class="form-control w-100" name=""></select>
            </div>
            <div class="form-group col-md-4 col-sm-12">
                <select id="input_city" class="form-control w-100" name="" ></select>
            </div>
            <div class="form-group col-md-4 col-sm-12">
                <button type="submit" class="btn btn-secondary w-100">查询</button>
            </div>
        </form>
    </div>
</div>




<div class="container mt-5">
    <div class="h3 text-center"><?php echo get_post("233")->post_title;?></div>
    <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("233")->post_excerpt;?></span></div>
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
                        <a class="btn btn-warning" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal">免费预约体验</a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">预约体验</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">姓名:</label>
                        <input type="text" class="form-control" name="name" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="tel-text" class="col-form-label">电话:</label>
                        <input type="text" class="form-control" name="tel" id="tel-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                <button type="button" id="modal-submit" class="btn btn-primary">提交</button>
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
        $('#modal-submit').click(function(e){
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
            var id="198";
            $.post("/wp-comments-post.php",
                {
                    author:username,
                    comment:"预约体验------联系人："+username+" "+
                    "电话:"+phone+" ",
                    comment_post_ID:id,
                    comment_parent:0,
                },
                function(data,status){
                    alert("提交成功");
                    $('#exampleModal').modal('hide');
                });
        }
    });
</script>




