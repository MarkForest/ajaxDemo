<?php get_header();?>
<section class="portfolio">
    <div class="container">
        <div class="row">
            <h3 class="portfolio__header">PORTFOLIO</h3>
            <div class="portfolio__image-block">
                <div id="portfolio-carousel" class="owl-carousel">
                    <div class="portfolio__carousel-item" style="background-image: url('<?php bloginfo('template_url')?>/images/portfolio1.jpg')">
                        <span class="portfolio__image-caption hidden-xs">It is a long established fact</span>
                        <span class="portfolio__hover-wrapper hidden-xs"></span>
                    </div>
                    <div class="portfolio__carousel-item" style="background-image: url('<?php bloginfo('template_url')?>/images/portfolio2.jpg')">
                        <span class="portfolio__image-caption hidden-xs">It is a long established fact</span>
                        <span class="portfolio__hover-wrapper hidden-xs"></span>
                    </div>
                    <div class="portfolio__carousel-item" style="background-image: url('<?php bloginfo('template_url')?>/images/portfolio3.jpg')">
                        <span class="portfolio__image-caption hidden-xs">It is a long established fact</span>
                        <span class="portfolio__hover-wrapper hidden-xs"></span>
                    </div>
                    <div class="portfolio__carousel-item" style="background-image: url('<?php bloginfo('template_url')?>/images/portfolio4.jpg')">
                        <span class="portfolio__image-caption hidden-xs">It is a long established fact</span>
                        <span class="portfolio__hover-wrapper hidden-xs"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="we-do">
    <div class="container">
        <div class="row bottom-border">
            <div class="col-md-12">
                <h3 class="we-do__header">What is Lorem Ipsum?</h3>
            </div>
            <div class="we_do__content-block clearfix col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="we-do__image"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="content-block">
                            <h4 class="content-block__header">Why do we use it?</h4>
                            <p class="content-block__text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.<br>
                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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

<?php wp_footer()?>
</body>
</html>