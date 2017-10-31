<?php
get_header();
global $wp_query;
$cat_Id = get_query_var('cat');
$cat = get_category($cat_Id);
?>

<?php get_header("nav"); ?>


<!--main start-->
<div class="case_body">
    <div class="case_con w1200">
        <div class="home_tit">
            <h3 class="bt"><?php get_category("14")->cat_name; ?></h3>
            <div class="t"><?php echo category_description("14"); ?></div>
        </div>

        <div class="case_sx">
            <ul class="clearfix">
                <li>
                    <div class="bt">应用领域</div>
                    <div class="text">
                        <a href="<?php echo home_url() . "?cat=14"; ?>" class="<?php echo ($cat_Id == 14) ? "cur" : ""; ?>">全部</a>
                        <?php
                        $cat_cases = get_categories("child_of=14");
                        foreach ($cat_cases as $cat_case):?>
                            <a class="<?php echo ($cat_Id == ($cat_case->cat_ID)) ? "cur" : ""; ?>" href="<?php echo home_url() . "?cat=" . $cat_case->cat_ID; ?>"><?php echo $cat_case->cat_name; ?></a>
                        <?php endforeach; ?>
                    </div>
                </li>
            </ul>
        </div>
        <div class="home_div2 case-div">
            <dl class="clearfix">
                <?php
                $case_posts = get_posts("category=$cat_Id&numberposts=100&order=desc");
                $c_post = $case_posts[0];
                ?>
                <dt class="f-l">
                    <a postid="<?php echo $c_post->ID;?>" href="javascript:void(0);" class="img">
                        <img src="<?php echo get_characterized_img($id); ?>" alt="<?php the_title(); ?>" style="width:100%; height:100%;"/>
                    </a>
                    <div class="text">
                        <a href="javascript:void(0);" class="bt"><?php echo $c_post->post_title; ?></a>
                        <div class="t clearfix">
                            <span class="s1"><?php echo get_post_meta("$c_post->ID", "面积", true); ?></span>
                            <span class="s2"><?php echo get_post_meta("$c_post->ID", "地址", true); ?></span>
                        </div>
                    </div>
                </dt>
                <dd class="f-r">
                    <ul class="clearfix">
                        <?php
                        foreach ($case_posts as $key => $post):
                            if ($key <= 4 && $key > 0): ?>
                                <li>
                                    <a postid="<?php echo $post->ID;?>" href="javascript:void(0);" class="img">
                                        <img src="<?php echo get_characterized_img($id); ?>" alt="<?php the_title(); ?>" style="width:100%; height:100%;"/>
                                    </a>
                                    <div class="text">
                                        <a href="javascript:void(0);" class="bt"><?php the_title(); ?></a>
                                        <div class="t clearfix">
                                            <span class="s1"><?php echo get_post_meta("$post->ID", "面积", true); ?></span>
                                            <span class="s2"><?php echo get_post_meta("$post->ID", "地址", true); ?></span>
                                        </div>
                                    </div>
                                </li>
                            <?php endif;endforeach; ?>
                    </ul>
                </dd>
                <dd class="clearfix gcase" style="width:100%;">
                    <ul class="clearfix">
                        <?php
                        foreach ($case_posts as $key => $post):
                            if ($key > 4): ?>
                                <li>
                                    <a postid="<?php echo $post->ID;?>" href="javascript:void(0);" class="img">
                                        <img src="<?php echo get_characterized_img($id); ?>" alt="<?php the_title(); ?>" style="width:100%; height:100%;"/>
                                    </a>
                                    <div class="text">
                                        <a href="javascript:void(0);" class="bt"><?php the_title(); ?></a>
                                        <div class="t clearfix">
                                            <span class="s1"><?php echo get_post_meta("$post->ID", "面积", true); ?></span>
                                            <span class="s2"><?php echo get_post_meta("$post->ID", "地址", true); ?></span>
                                        </div>
                                    </div>
                                </li>
                            <?php endif;endforeach;
                        wp_reset_postdata(); ?>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
</div><!--main end-->


<div>
    <?php foreach ($case_posts as $case_p): ?>
        <div postid="<?php echo $case_p->ID;?>" class="case-tc" id="case-tc" style="display: none;">
            <div class="case-d"><span class="guanbi"></span>
                <h1><?php echo $case_p->post_title;?><span></span></h1>
                <div class="case-box2 clearfix">
                    <div class="case-t slick-initialized slick-slider">
                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track" role="listbox">
                                <?php get_array_img("$case_p->ID");
                                foreach ($gallery as $img):
                                    ?>
                                    <div class="slick-slide" aria-hidden="false" role="option">
                                        <em><img src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>"></em>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-tc-text clearfix">
                    <span class="s1"><?php echo get_post_meta("$case_p->ID","地址",true);?></span>
                    <span class="s2"><?php echo get_post_meta("$case_p->ID","面积",true);?></span>
                    <span class="s3"><?php echo get_post_meta("$case_p->ID","品牌型号",true);?></span>
                    <span class="s4"><?php echo get_post_meta("$case_p->ID","应用领域",true);?></span>
                </div>
            </div>
            <i></i>
        </div>
    <?php endforeach;?>
</div>


<?php get_footer(); ?>
<script type="text/javascript">
    var cs = location.href.split("#")[1], cururl;
    if ($('a[name="' + cs + '"]').length) {
        $('a[name="' + cs + '"]').parent().addClass('cur').siblings().removeClass('cur');
        var i = $('a[name="' + cs + '"]').parent().index();

        $('.case-div').children().eq(i).fadeIn().siblings().hide();
    } else {
        $('.case-nav span').eq(0).click();
    }
    $(window).on('hashchange', function () {
        var cs = location.href.split("#")[1];
        if ($('a[name="' + cs + '"]').length && cs != cururl) {
            cururl = cs;
            $('a[name="' + cs + '"]').parent().addClass('cur').siblings().removeClass('cur');
            var i = $('a[name="' + cs + '"]').parent().index();

            $('.case-div').children().eq(i).fadeIn().siblings().hide();
        }
    });
    //案例展示 -- End


    $(".case-div a.img").click(function () {
        var id = $(this).attr('postid');// return false;
        $(".case-tc").each(function(){
           var post_id=$(this).attr("postid");
           if (id==post_id){
               $(this).css("display","block");
               $(this).siblings(this).css("display","none");
           }
        });
    });
    $(".case-tc").on('click', '.guanbi', function () {
        $(".case-tc").each(function(){
            $(this).css("display","none");
        });
    });
</script>

<script>
    $('.slick-track').slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
</script>


