<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo Site::url(); ?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo Site::title(); ?> | <?php echo Site::name(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo Site::description(); ?>">
    <meta name="keywords" content="<?php echo Site::keywords(); ?>">
    <meta name="robots" content="<?php echo Page::robots(); ?>">

    <?php Action::run('theme_meta'); ?>

    <!-- Open Graph Protocol -->
    <meta property="og:site_name" content="<?php echo Site::name(); ?>">
    <meta property="og:url" content="<?php echo Url::current(); ?>">
    <meta property="og:title" content="<?php echo Site::title(); ?> | <?php echo Site::name(); ?>">

    <!-- Google+ Snippets -->
    <meta itemprop="url" content="<?php echo Url::current(); ?>">
    <meta itemprop="name" content="<?php echo Site::title(); ?> | <?php echo Site::name(); ?>">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo Site::url(); ?>/public/assets/css/bootstrap.css" type="text/css" />
    <?php Stylesheet::add('public/themes/default/css/default.css', 'frontend', 2); ?>
    <?php Stylesheet::load(); ?>

    <!-- Custom Fonts -->
    <link href="<?php echo Site::url(); ?>/public/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- JavaScripts -->
    <?php Javascript::add('public/assets/js/jquery.min.js', 'frontend', 1); ?>
    <?php Javascript::add('public/assets/js/bootstrap.min.js', 'frontend', 2); ?>
    <?php Javascript::load(); ?>

    <?php Action::run('theme_header'); ?>   
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Fav-icons -->
    <link rel="icon" href="<?php echo Site::url(); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo Site::url(); ?>/favicon.ico" type="image/x-icon">    
    
    
</head>