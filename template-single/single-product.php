<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/6
 * Time: 11:15
 */

get_header();
$id = get_the_ID();
$id1=get_the_ID();
$cats = get_the_category($id);
$catId = null;
foreach ($cats as $cat) {
    if ($cat->parent != 0) {
        $catId = $cat->cat_ID;
        break;
    }
}
print_r($catId);
$cat = get_category($catId); ?>
<?php get_header("nav"); ?>

<!--main start-->
<div class="product_body product_info_body">
    <div class="pro_show">


        <?php
            if (have_posts()):?>

        <div class="w1220">
            <div class="bread"> <a href="/">首页</a> > <a href="">产品中心</a> > <?php the_title();?> </div>
            <div class="proshow_con clearfix">
                <dl class="clearfix">
                    <dt class="f-l" id="pic_box"> <div class="img"><img src="<?php echo get_characterized_img("$id");?>" alt="" style="width:100%;" /></div> </dt>
                    <dd class="f-r">
                        <h1><?php the_title();?></h1>
                        <div class="text_b clearfix">
                            <?php
                                $texings=get_post_meta("$id","特性");
                                foreach ($texings as $texing):?>
                                    <span><?php echo $texing;?></span>
                                    <?php endforeach;?>
                            </div>
                        <h3 class="tit">技术指标<span>Technical Specifications</span></h3>
                        <div class="text_t clearfix">
                            <p class="t"> <span><?php echo get_post_meta("$id","产品厚度",true);?></span><span><?php echo get_post_meta("$id","耐磨层厚度",true);?></span></p>
                            <p class="t"> <span><?php echo get_post_meta("$id","卷长",true);?></span><span><?php echo get_post_meta("$id","卷宽",true);?></span> </p>
                            <p class="t"> <span><?php echo get_post_meta("$id","产品原料",true);?></span></p>
                            <p class="t"> <span><?php echo get_post_meta("$id","防火性能",true);?></span></p>
                        </div>
                        <h3 class="tit">运营色<span>Operations color</span></h3>
                        <div class="se_list">
                            <ul class="clearfix">
                                <?php
                                    get_array_img("$id");
                                    foreach ($gallery as $img): ?>
                                        <li><a href="javascript:void(0)"><img src="<?php echo $img->url;?>" alt=""/></a></li>
                                    <?php endforeach;?>
                            </ul>
                            <div class="tc_sekuai">
                                <?php
                                    get_array_img("$id");
                                    foreach ($gallery as $img): ?>
                                        <div class="img"><img src="<?php echo $img->url;?>" alt="" /></div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>

        <?php endif;?>
    </div>
    <div class="proshow_div">
        <div class="w1220">
            <div class="list_con">
                <ul class="clearfix">
                    <li class="cur"><a href="#chanpintedian">产品特点</a></li>
                    <li><a href="#chanpincanshu">产品参数</a></li>
                    <li><a href="#xiangguanchanpin">相关产品</a></li>
<!--                    <li><a href="#xiangguanzixun">相关资讯</a></li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="proshow_div2">
        <div class="w1220">

           <?php echo get_post("$id")->post_content;?>

            <div class="list_btn" id="xiangguanchanpin">
                <p style="margin-bottom: 20px;">
				<span style="font-size:24px">
					<span style="font-family:arial,helvetica,sans-serif">
						<span style="color:#7c7365">相关产品 | Related Products</span>
					</span>
				</span>
                </p>
                <ul class="chanpin clearfix">
                    <?php
                    query_posts("cat=$catId&order=desc&showposts=5");
                    while (have_posts()) : the_post();
                        $single_id=get_the_ID();
                        if ($single_id==$id1) continue;?>
                        <li>
                            <a href="<?php the_permalink();?>">
                                <div class="img"><img src="<?php echo get_characterized_img("$single_id");?>" alt="" /></div>
                                <div class="text clearfix"><span><?php the_title();?></span></div>
                            </a>
                        </li>
                    <?php endwhile;wp_reset_query();?>
                </ul>
                <a href="#" class="cp_more"></a> </div>
<!--            <div class="list_btn" id="xiangguanzixun">-->
<!--                <p style="margin-bottom: 20px;">-->
<!--                    <span style="font-size:24px">-->
<!--                        <span style="font-family:arial,helvetica,sans-serif">-->
<!--                            <span style="color:#7c7365">相关资讯 | Relevant Information</span>-->
<!--                        </span>-->
<!--                    </span>-->
<!--                </p>-->
<!--                <ul class="list clearfix">-->
<!--                    <div class="more_height"></div>-->
<!--                    <div class="more_center clearfix">-->
<!--                        <a href="" class="more">查看更多</a>-->
<!--                    </div>-->
<!--            </div>-->
        </div>
    </div>
</div>






<?php
get_footer(); ?>
<script type="text/javascript">
    $('.se_list ul').slick({
        dots:false,
        arrows:true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('#pic_box').slick({
        dots:true,
        arrows:false,
        infinite: true,
        slidesToShow: 1
    });

    $(".se_list li a").click(function(e){
        $(".tc_sekuai").show().find("div img").attr("src", $(this).find("img").attr("src"));
        $(this).parent().addClass("cur").siblings().removeClass("cur");
        e.stopPropagation();
    });
    $("body").click(function(){
        $(".tc_sekuai").hide();
    });

</script>
<script type="text/javascript">
    var fuc = document.querySelector('.fuchuang');
    var tanc = document.querySelector('.tchu');
    var num = 1;
    fuc.onclick = function() {
        if(num == 1) {
            this.style.right = 0 + 'px';
            tanc.style.right = -200 + 'px';
            tanc.style.top = 400 + 'px';
            num = num + 1;

        }else{
            this.style.right = 200 + 'px';
            tanc.style.right = 0 + 'px';
            num = num - 1;
        }
    }

</script>


