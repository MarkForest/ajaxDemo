<?php
/*
Template Name: Portfolio
*/
?>
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
<?php get_footer();?>
<?php wp_footer();?>
