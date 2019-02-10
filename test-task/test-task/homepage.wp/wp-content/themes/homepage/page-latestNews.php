<?php
/*
Template Name: Latest News
*/
?>
<?php get_header();?>
<section class="news">
    <div class="container">
        <div class="row bottom-border">
            <div class="col-md-12">
                <h3 class="news__header">LATEST NEWS</h3>
            </div>
            <div class="news__content-block clearfix col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="news__content-block-image img-responsive" src="<?php bloginfo('template_url')?>/images/news1.jpg" alt="news_image">
                            </div>
                            <div class="col-xs-9">
                                <h3 class="news__content-block-header">SOME INTERESTING NEWS</h3>
                                <p class="news__content-block-text">Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...</p>
                                <button class="btn btn-default news__content-block-button">Read more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="news__content-block-image img-responsive" src="<?php bloginfo('template_url')?>/images/news2.jpg" alt="news_image">
                            </div>
                            <div class="col-xs-9">
                                <h3 class="news__content-block-header">SOME INTERESTING NEWS</h3>
                                <p class="news__content-block-text">Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...</p>
                                <button class="btn btn-default news__content-block-button">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="news__content-block-image img-responsive" src="<?php bloginfo('template_url')?>/images/news3.jpg" alt="news_image">
                            </div>
                            <div class="col-xs-9">
                                <h3 class="news__content-block-header">SOME INTERESTING NEWS</h3>
                                <p class="news__content-block-text">Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...</p>
                                <button class="btn btn-default news__content-block-button">Read more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="news__content-block-image img-responsive" src="<?php bloginfo('template_url')?>/images/news4.jpg" alt="news_image">
                            </div>
                            <div class="col-xs-9">
                                <h3 class="news__content-block-header">SOME INTERESTING NEWS</h3>
                                <p class="news__content-block-text">Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...</p>
                                <button class="btn btn-default news__content-block-button">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
<?php wp_footer();?>
