<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:品牌介绍
 */

get_header();
$id=get_the_ID();
get_header("nav")?>

<div class="brand">
    <div class="jumbotron" style="background-image:url(<?php echo get_characterized_img($id);?>)">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="pt-4 pb-4">
            <?php echo get_post("66")->post_content;?>
        </div>
        <div class="row">
            <?php
                get_gallery("66");
                foreach ($gallery as $img): ?>
                    <div class="col-md-3 col-sm-6">
                        <img class="w-100 rounded float-left" src="<?php echo $img->url?>" alt="<?php echo $img->title?>" />
                    </div>
            <?php endforeach;?>
        </div>
        <div class="brand-1 mt-5">
            <div class="h3  justify-content-center">意式时尚·实木家居</div>
            <div class="h6  justify-content-center">打造国际顶级的时尚家居品牌</div>
            <div class="mt-4" style="background:#333;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <?php
                get_gallery("75");
                foreach ($gallery as $img):?>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <img src="<?php echo $img->url;?>" class="card-img-top" />
                            <div class="card-body">
                                <div class="card-title"><?php echo $img->title;?></div>
                                <p class="card-text"><?php echo $img->excerpt;?></p>
                            </div>
                        </div>
                    </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="jumbotron" style="background-image:url(<?php echo get_characterized_img($id);?>)">
        <div class="container clearfix">
            <p class="lead">
                卡诺尼克 Cistonica.G
                意大利新锐家具设计师设计师
                简约中 遇见时代之声
                创造间 遇见心之归所</p>
            <hr class="my-4 float-left" style="border-top: 1px solid rgba(1000,100,110,.9);width: 100px;">
            <p class="float-left">古老的艺术之都——意大利，诞生过无数浪漫的艺术传奇。进入二十一世纪，米兰时尚的崛起使新生代设计师有了更大的舞台。
                卡诺尼克，生于意大利，自幼热爱设计，在意大利家具传统工艺领域与设计领域专注学习多年，虽年轻已经深得意大利家具的精髓，
                俨然成为意大利新生设计师中最卓越的代表，短短几年已在业内积累起良好的声誉，由他与金永亮合作推出的意式新锐时尚品牌
                ——钛马迪正是其代表之作。</p>
        </div>
    </div>



    <div class="h3  text-center"><?php echo get_post("80")->post_title;?></div>
    <div class="h6  text-center"><?php echo get_post("80")->post_content;?></div>
    <div class="container">
        <div class="brand-3 mt-5">
            <?php
                get_gallery("80");
                foreach ($gallery as $key=>$img):
                    if($key%2==0):?>
                    <div class="row mt-4">
                       <div class="col-md-6">
                           <div class="card-body">
                               <h4 class="card-title"><?php echo $img->title;?></h4>
                               <div class="card-text"><?php echo $img->excerpt;?></div>
                           </div>
                       </div>
                        <div class="col-md-6 col-sm-12"><img class="w-100" src="<?php echo $img->url?>" alt="<?php echo $img->title;?>"></div>
                    </div>
                        <?php else:?>
                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-12"><img class="w-100" src="<?php echo $img->url?>" alt="<?php echo $img->title;?>"></div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $img->title;?></h4>
                                    <div class="card-text"><?php echo $img->excerpt;?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>


    <div class="h3 mt-5 text-center"><?php echo get_post("84")->post_title;?></div>
    <div class="container">
        <div class="brand-3 mt-5">
            <?php
            get_gallery("84");
            foreach ($gallery as $key=>$img):
                if($key%2==0):?>
                    <div class="row mt-4">
                        <div class="col-md-6 col-sm-12">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $img->title;?></h4>
                                <div class="card-text"><?php echo $img->excerpt;?></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12"><img class="w-100" src="<?php echo $img->url?>" alt="<?php echo $img->title;?>"></div>
                    </div>
                <?php else:?>
                    <div class="row mt-4">
                        <div class="col-md-6 col-sm-12"><img class="w-100" src="<?php echo $img->url?>" alt="<?php echo $img->title;?>"></div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $img->title;?></h4>
                                <div class="card-text"><?php echo $img->excerpt;?></div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>


    <div class="container mt-5">
        <?php
            get_gallery("89");
            foreach ($gallery as $img): ?>
                <figure class="card">
                    <img class="w-100" src="<?php echo $img->url;?>" alt="<?php echo $img->title;?>">
                    <figcaption class="card-body">
                        <h4 class="card-title"><?php echo $img->title;?></h4>
                        <div class="card-text"><?php echo $img->excerpt;?></div>
                    </figcaption>
                </figure>
        <?php endforeach;?>
    </div>


    <div class="brand-news1" style="background:#021c3d;color: #fff;">
        <div class="h3 pt-4 text-center"><?php echo get_post("80")->post_title;?></div>
        <div class="h6 pt-1 pb-4  text-center"><?php echo get_post("80")->post_content;?></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <figure class="card">
                        <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                        <figcaption class="card-body">
                            <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="h3 mt-4 mb-4 text-center"><?php echo get_post("80")->post_title;?></div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure class="card">
                    <img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/brand/news1.jpg" alt="">
                    <figcaption class="card-body">
                        <div class="card-text" style="color:#333;"><?php echo $img->title;?></div>
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>






</div>





<?php get_footer(); ?>
