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
    <div class="jumbotron rounded-0" style="background-image:url(<?php echo get_characterized_img($id);?>)">
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
            <div class="h3 text-center"><?php echo get_post("227")->post_title;?></div>
            <div class="text-center title-text mt-2 mb-4"><span class="pl-md-5 pr-md-5"><?php echo get_post("227")->post_excerpt;?></span></div>
            <div class="mt-4" style="background:#333;">
                <div class="embed-responsive embed-responsive-16by9">
                    <?php echo get_post("227")->post_content;?>
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

    <div class="jumbotron rounded-0" style="background-image:url(<?php echo get_characterized_img($id);?>)">
        <div class="container clearfix">
            <p class="lead"><?php echo get_post("229")->post_title;?></p>
            <hr class="my-4 float-left" style="border-top: 1px solid rgba(1000,100,110,.9);width: 100px;">
            <p class="float-left"><?php echo get_post("229")->post_content;?></p>
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

        </div>
    </div>






</div>





<?php get_footer(); ?>
