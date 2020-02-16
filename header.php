<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(  ); ?>
    <title>Blog-Main</title>
</head>

<body>

    <div class="main-wrapper">
        <header class="header">
            <div class="navdiv">
                <div class="hamburger">
                  <div class="line"></div>
                  <div class="line"></div>
                  <div class="line"></div>
                </div>
                <ul class="nav-links">
                  <a href="<?php echo site_url( '' ) ?>"><li <?php if(is_front_page(  )) echo 'class="nav-active"' ?>>Home</li></a>
                  <a href="<?php echo site_url( '/blog' ) ?>"><li <?php if(get_post_type(  )=='post') echo 'class="nav-active"' ?>>Blog</li></a>
                  <a href="<?php echo site_url( '/Projects' )?>"><li <?php if(get_post_type(  )=='projects') echo 'class="nav-active"' ?>>Project</li></a>
                  <a href="<?php echo site_url( '/about' )?>"><li <?php if(is_page( 'about' )) echo 'class="nav-active"' ?>>About</li></a>
                </ul>
            </div>
        </header><!-- header end -->