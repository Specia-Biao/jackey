<?php
get_header();
get_header("nav");
?>

<div class="banner">
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
    <div class="">
        <div class="h3 text-center">意式时尚·实木家居</div>
        <div class="h6 text-center">Tremendous Modern Design·非凡的现代主义设计</div>
        <div class="row">
            <div class="col-md-3 col-sm-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">title</p>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">title</p>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">title</p>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">title</p>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="card-body">
                        <p class="card-text">title</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="product  mt-3">
        <div class="h3 text-center">全部产品/时尚·创意·轻奢·极简</div>
        <div class="h6 text-center">欧洲进口山毛榉、黑胡桃、樟子松，英国进口JMT米兰纯牛皮、意大利原产SIVAM斯瓦姆水性自然漆，精选原材符合国际最高环保标准。
            意大利设计师原创设计，采用燕尾榫、门板、领先实木弯曲等传统手工制作工艺与数字化智造相结合，世界品质，中国智造。</div>
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-2 m-2">
                    <img class="" style="width: 45px;" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="">title</div>
                </div>
                <div class="col-md-2 m-2">
                    <img class="" style="width: 45px;" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="">title</div>
                </div>
                <div class="col-md-2 m-2">
                    <img class="" style="width: 45px;" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="">title</div>
                </div>
                <div class="col-md-2 m-2">
                    <img class="" style="width: 45px;" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                    <div class="">title</div>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="/">
                <div class="col-md-3 col-sm-2">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                        <div class="card-body">
                            <h6 class="card-title">title</h6>
                            <p class="card-text">KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920</p>
                            <a class="card-link" href="">预约体验</a>
                            <a class="card-link" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="col-md-3 col-sm-2">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                        <div class="card-body">
                            <h6 class="card-title">title</h6>
                            <p class="card-text">KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920</p>
                            <a class="card-link" href="">预约体验</a>
                            <a class="card-link" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="col-md-3 col-sm-2">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                        <div class="card-body">
                            <h6 class="card-title">title</h6>
                            <p class="card-text">KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920</p>
                            <a class="card-link" href="">预约体验</a>
                            <a class="card-link" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="col-md-3 col-sm-2">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                        <div class="card-body">
                            <h6 class="card-title">title</h6>
                            <p class="card-text">KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920</p>
                            <a class="card-link" href="">预约体验</a>
                            <a class="card-link" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div class="text-center">
            <button class="btn btn-outline-dark mt-4 pl-4 pr-4">
                查看更多产品信息
            </button>
        </div>
    </div>




    <div class="case mt-3">
        <div class="h3 text-center">客户案例/钛马迪·新精英生活</div>
        <div class="h6 text-center">为千万城市精英 智造精致时尚家居生活</div>
        <div class="row justify-content-center">
            <a href="/">
                <div class="col m-2" style="background-image:url(<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/test.jpg);">
                    <div class="pro_detail invisible">
                        <h6>title</h6>
                        <div class="text-center">
                            KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920
                        </div>
                        <div class="row">
                            <a class="col" href="">预约体验</a>
                            <a class="col" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="col m-2" style="background-image:url(<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/test.jpg);">
                    <div class="pro_detail invisible">
                        <h6>title</h6>
                        <div class="text-center">
                            KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920
                        </div>
                        <div class="row">
                            <a class="col" href="">预约体验</a>
                            <a class="col" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="col m-2" style="background-image:url(<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/test.jpg);">
                    <div class="pro_detail invisible">
                        <h6>title</h6>
                        <div class="text-center">
                            KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920
                        </div>
                        <div class="row">
                            <a class="col" href="">预约体验</a>
                            <a class="col" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="col m-2" style="background-image:url(<?php echo get_bloginfo("stylesheet_directory");?>/assert/images/test.jpg);">
                    <div class="pro_detail invisible">
                        <h6>title</h6>
                        <div class="text-center">
                            KT25 巴赫双人沙发（真皮） KT30#深灰蓝色真皮;腰包KT49#面料两个 产品规格（mm）：1750*740*920
                        </div>
                        <div class="row">
                            <a class="col" href="">预约体验</a>
                            <a class="col" href="">加入心愿单</a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center">
            <button class="btn btn-outline-dark mt-4 pl-4 pr-4">
                查看更多客户案例
            </button>
        </div>
    </div>





    <div class="store mt-3">
        <div class="h3 row justify-content-center">门店查询/钛马迪·新精英生活</div>
        <div class="h6 row justify-content-center">为千万城市精英 智造精致时尚家居生活</div>
        <div class="row">
            <a href="/">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text">title</p>
                        </div>
                    </div>
                </div>
            </a>
           <a href="/">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_bloginfo("stylesheet_directory")?>/assert/images/test.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text">title</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center mt-5 mb-4">
            <button class="btn btn-outline-dark">
                查看更多店面信息
            </button>
        </div>
        </div>
    </div>
</div>




















<?php

get_footer();

?>


