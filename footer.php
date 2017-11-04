<!--footer start-->
<div class="footer mt-5" style="color: #fff;">
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-4 col-sm-12"><img class="w-100" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/b_logo.png" alt=""></div>
            <div class="col-md-4 offset-md-4 col-sm-12 text-center">
                <div class="h3  d-inline-block" style="vertical-align:top">Contact Us!</div>
                <a class="btn btn-light btn-md" href="/">
                    <img style="vertical-align:-2px"  src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/1_1_1.png" alt="">
                    <span>在线咨询</span>
                </a>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-8 d-none d-sm-block">
                <div class="row">
                    <?php
                        $footer_menus=theme_nav_menu("footer");
                        foreach ($footer_menus as $f_menu):?>
                        <div class="col text-center">
                            <div><span class="font-size-14"><?php echo $f_menu->name;?></span></div>
                            <?php if (!empty($f_menu->submenu)):
                                $submenus=$f_menu->submenu; ?>
                            <ul class="navbar-nav nav">
                                <?php
                                    foreach ($submenus as $submenu): ?>
                                        <li class="nav-item"><a class="nav-link font-size-12" href="<?php echo $submenu->url;?>"><?php echo $submenu->name;?></a></li>
                                <?php endforeach;endif;?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/weixin.jpg" alt="">
                        <div class="text-center wx-text">扫一扫立刻关注</div>
                    </div>
                    <div class="col-md-8">
                        <?php echo get_post("215")->post_content;?>
<!--                        <h6 class="text-left pl-2">中国区门店查询</h6>-->
<!--                        <div style="font-size: 12px;">-->
<!--                            <div class="mb-2">服务电话：010-67381199 / 贵宾服务专线</div>-->
<!--                            <div class="mb-2">服务电话：010-67381199 / 贵宾服务专线</div>-->
<!--                            <div class="mb-2">服务电话：010-67381199 / 贵宾服务专线</div>-->
<!--                            <div class="mb-2">服务电话：010-67381199 / 贵宾服务专线</div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2 mt-4" style="border-top: 1px solid #999;">
            <div class="pb-4" style="font-size:12px;">
                <?php echo get_post("212")->post_content;?>&nbsp;&nbsp;&nbsp;
                <a class="font-size-14" href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">
                    <?php echo get_option( 'zh_cn_l10n_icp_num' );?>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/script/jquery-3.2.1.min.js"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/script/imgzoom/magiczoomplus.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/script/comment.js"></script>


</body>
</html>

<!--footer end-->