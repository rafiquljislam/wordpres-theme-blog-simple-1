<?php get_header() ?>


<!-- all posts -->
<div class="container-fluid">
    <div class="row">
    <div class="col-md-8">
        <?php
            if(have_posts()):
                while(have_posts()):the_post(); ?>

                <div class="media">
                    <?php the_post_thumbnail('thumbnail',array('class'=>'media_image p-2')) ?>
                    <div class="media-body">
                        <h3 class="mt-0"><?php the_title( ) ?></h3>
                        <p class="">Poted on <?php get_the_date(  ) ?> BY <?php echo get_the_author_posts_link() ?></p>
                        <?php echo content(30) ?>
                    </div>                    
                </div>
                        <?php endwhile;
            endif;
        ?>
        <div class="paganirion">
            <h2><?php echo paginate_links(); ?></h2>
        </div>
    </div>
    <!-- left Widgets -->
    <?php get_template_part( '/template-parts/leftwidwets' ) ?>
    <!-- left Widgets END -->
    </div>
</div>

<!-- all posts End -->
<!-- footer widget -->
<?php get_template_part( '/template-parts/footerwigets' ) ?>
<!-- footer widgetEnd -->




<?php get_footer() ?>