


<!--header start-->
<body>


<header class="home-header">
    <nav class="d-none d-sm-block home-top">
        <div class="container">
            <div class="row">
                <div class="site-name col-8"><?php echo bloginfo("name");?></div>
                <div class="top-header col-4 d-flex justify-content-end">
                        <span class="text-right mr-2 wb">
                            <a href="#">微博</a>
                        </span>
                        <span class="text-right mr-2 gzh">
                            <a href="#">公众号</a>
                        </span>
                        <span class="text-right mr-2 tel"><a href="/">联系电话</a></span>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="header-menu">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container">
                <a class="navbar-brand d-none d-sm-block mr-5" href="/"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/logo.png" alt=""></a>
                <a class="navbar-brand d-block d-sm-none" href="/"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/m_logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul id="home-menu" class="navbar-nav nav col-md-9">
                        <?php
                            $menus=theme_nav_menu("primary");
                            foreach ($menus as $key=>$menu):?>
                                <li class="mt-2 <?php echo ($key==0)?"active":"";?>">
                                    <a class="" href="<?php echo $menu->url;?>">
                                        <span class="out"><?php echo $menu->name;?></span>
                                        <span class="over"><?php echo $menu->description;?></span>
                                    </a>
                                </li>
                        <?php endforeach;?>
                    </ul>
                    <form action="<?php echo home_url( "/" );?>" class="mt-2 mt-lg-0 col-md-3 nav-search position-relative">
                        <input type="hidden" name="cat" value="2">
                        <input class="form-control search-input rounded-0" name="s" id="s" type="search" placeholder="请输入产品名称" aria-label="Search">
                        <input type="submit" class="submitBtn position-absolute" />
                    </form>
                </div>
                </div>
            </nav>
    </div>
</header>


<!--header end-->