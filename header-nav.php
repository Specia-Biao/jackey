


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
                <a class="navbar-brand d-none d-sm-block" href="/"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/logo.png" alt=""></a>
                <a class="navbar-brand d-block d-sm-none" href="/"><img src="<?php echo get_bloginfo("stylesheet_directory", "display") ?>/assert/images/m_logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-lg-0">
                        <input class="form-control mr-sm-4 search-input" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                </div>
            </nav>
    </div>
</header>

<!--header end-->