<?php get_header() ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <?php 
            if(have_posts()):
                while(have_posts()):the_post(); ?>

                <div class="">
                    <h1><?php the_title() ?></h1>
                    <figure class="">
                        <?php the_post_thumbnail( 'full', array('class'=>'single_page_img rounded') ) ?>
                        <figcaption class="figure-caption">Posted on <?php echo get_the_date() ?> By <?php echo get_the_author_posts_link() ?></figcaption>
                    </figure>
                    <?php the_content() ?>
                </div>
                        <?php  endwhile;
            endif;            
            ?>
        </div>
        <?php get_template_part( '/template-parts/leftwidwets' ) ?>
    </div>
</div>

<!-- footer widget -->
<?php get_template_part( '/template-parts/footerwigets' ) ?>
<!-- footer widgetEnd -->




<?php get_footer() ?>