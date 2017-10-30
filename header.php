<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 360浏览器内核 -->
    <meta name="renderer" content="webkit">
    <title><?php bloginfo("name"); ?></title>
    <meta name="keywords" content="<?php echo get_post_meta("16","keywords",true);?>">
    <meta name="description" content="<?php echo get_post_meta("16","description",true);?>">
    <link href="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/style/style.css" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
</head>