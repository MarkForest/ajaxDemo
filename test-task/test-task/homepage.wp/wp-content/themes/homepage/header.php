<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description');?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<body>

<header class="header">
    <div class="header__top-contact">
        <div class="container">
            <div class="row">
                <div class="header__flex-container">
                    <a href="tel:+7925678745" class="tel-number">+792 567 8745</a>
                    <a class="hidden-xs" href="mailto:contact@blueowlcreative.com" class="email">contact@blueowlcreative.com</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__menu">
        <nav class="navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php the_custom_logo($blog_id)?>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'secondary',
                            'menu'            => '',
                            'container'       => 'ul',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'nav navbar-nav navbar-right',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) );
                    ?>
                </div>
            </div>
        </nav>
    </div>
    <div class="header__slider">
        <div class="owl-carousel" id="home-slider">
            <div class="header__slide-item" style="background-image: url('<?php bloginfo('template_url')?>/images/Slide1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="header__content">
                                <h2 class="header__header">CONTRARY TO POPULAR BELIEF</h2>
                                <p class="header__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__slide-item" style="background-image: url('<?php bloginfo('template_url')?>/images/Slide2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="header__content">
                                <h2 class="header__header">CONTRARY TO POPULAR BELIEF</h2>
                                <p class="header__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__slide-item" style="background-image: url('<?php bloginfo('template_url')?>/images/Slide3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="header__content">
                                <h2 class="header__header">CONTRARY TO POPULAR BELIEF</h2>
                                <p class="header__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__panels">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="header__panel">
                        <span class="panel__icon"></span>
                        <h3 class="panel__heading">Responsive design</h3>
                        <p class="panel_text">
                            I a m so clever that sometimes I do not  understand a single word of what I am saying and get very confused.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header__panel">
                        <span class="panel__icon"></span>
                        <h3 class="panel__heading">Web development</h3>
                        <p class="panel_text">
                            It is better to be hated for what you are than to be loved for what you are not, so might as well be yourself.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header__panel">
                        <span class="panel__icon"></span>
                        <h3 class="panel__heading">customer support</h3>
                        <p class="panel_text">
                            Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header__panel">
                        <span class="panel__icon"></span>
                        <h3 class="panel__heading">images included</h3>
                        <p class="panel_text">
                            Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__searching-form">
        <div class="container">
            <div class="row">
                <div class="header__search-block">
                    <h2 class="header__search-header">search</h2>

                    <div class="input-group">
                        <input  class="form-control header__search-input" name="search" type="text" placeholder="Search...">

                        <span class="input-group-btn">
                            <button class="header__search-button btn btn-default" type="button">search</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
    </div>
</header>