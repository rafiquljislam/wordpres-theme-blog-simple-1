<?php get_header() ?>




<!-- header image -->
<div class="container-fluid header_image_continer">
    <img class="header_image" alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">
    <div class="header_image_text p-5">
        <h1>Hello World</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus necessitatibus accusamus iste fugiat esse, maiores voluptas voluptatum ad tenetur? Rerum neque nisi cum. Sunt quia voluptatem quas, dolore quos laborum.</p>
    </div>
</div>
<!-- header image END -->

<!-- stacky post -->
<div class="container-fluid text-center my-4">
    <div class="stacky_post_head">
        <h1 class="display-3 p-3">St<span class="servesh_border">icky Pos</span>ts</h1>
    </div>
    <div class="row">
        <?php 
        $args = array(
            'post__in' => get_option( 'sticky_posts' ),
        );
        $query = new WP_Query( $args );
        if($query->have_posts()):
            while($query->have_posts()):$query->the_post(); ?>

            <div class="col-md-6 sticky_post_container p-2">
                <?php the_post_thumbnail( 'full', array('class'=>'sticky_post_image') ) ?>
                <div class="stacky_post_content">
                    <h1><?php the_title() ?></h1>
                    <?php echo content(30) ?>
                </div>
            </div>
        <?php
        endwhile;
        endif;
        ?>
    </div>
</div>
<!-- stacky post END -->
<!-- all posts -->
<div class="container-fluid">
    <div class="row">
    <div class="col-md-8">
        <?php 
            $args = array(
                'post__not_in' => get_option('sticky_posts')
            );
            $query = new WP_Query($args);
            if($query->have_posts()):
                while($query->have_posts()):$query->the_post(); ?>

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