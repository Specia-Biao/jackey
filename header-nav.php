


<!--header start-->
<body>


<header class="home-header">
    <nav class="d-none d-sm-block home-top">
        <div class="container">
            <div class="row">
                <div class="site-name col-8"><?php echo bloginfo("name");?></div>
                <div class="top-header col-4 d-flex justify-content-end">
                        <span class="text-right mr-2"><a href="/">实例页面1</a></span>
                        <span class="text-right mr-2"><a href="/">实例页面2</a></span>
                        <span class="text-right mr-2"><a href="/">实例页面3</a></span>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="header-menu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                <a class="navbar-brand d-none d-sm-block mr-5" href="/"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/logo.png" alt=""></a>
                <a class="navbar-brand d-block d-sm-none" href="/"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/m_logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul id="header" class="navbar-nav nav col-md-10">
                        <?php
                            $menus=theme_nav_menu("primary");
                            foreach ($menus as $key=>$menu):?>
                                <li class="tit nav-item <?php echo ($key==0)?"active":"";?>">
                                    <a class="nav-link" href="<?php echo $menu->url;?>" rel="<?php echo $menu->description;?>"><?php echo $menu->name;?></a>
                                </li>
                        <?php endforeach;?>
                    </ul>
                    <form class="mr-4 mt-2 mt-lg-0 col-md-2">
                        <input class="form-control search-input rounded-0 col-md-12" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                </div>
            </nav>
    </div>
</header>

<!--header end-->