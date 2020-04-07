
<?php get_header() ?>

<!-- top slider -->
<div class="">
    <!-- Set up your HTML -->
    <div class="owl-carousel">
        <?php
        $args = array(
            'post_type'=>'slider',
        );
        $query = new WP_Query( $args );
        if($query->have_posts()):
            while($query->have_posts()):$query->the_post(); ?>
        <div>
            <?php the_post_thumbnail( 'full', array('class'=>'topslider') ) ?>
            <div class="topslider_text text-center">
                <h1><?php the_title() ?></h1>
                <p><?php the_content() ?></p>
            </div>
        </div>
        <?php endwhile;
            endif;
        ?>
    </div>
</div>
<!-- top slider End -->

 <!-- our Serveses -->
<div class="container-fluid text-center">
    <div class="catagory_name mb-3">
        <h1 class='display-3 p-3'>Ow<span class="servesh_border">er Serve</span>ses</h1>
    </div>
    <div class="row">
            <?php 
            $args = array(
                'post_type'=>'services',
            );
            $query = new WP_Query( $args );
            if($query->have_posts()):
                while($query->have_posts()):$query->the_post(); ?>

        <div class="col-md-3  my-2 ">
            <div class="card single_serves">
                <?php the_post_thumbnail( 'full', array('class'=>"single_serves_image",) ) ?>
                <div class="card-body">
                    <h2 class="card-title"><?php the_title() ?></h2>
                    <p class="card-text"><?php the_content() ?></p>
                    <a class="btn btn-outline-info" href="#">Order now</a>
                </div>
            </div>
        </div>
        <?php   endwhile;
            endif;
            ?>
    </div>
</div>
 <!-- our Serveses END -->

 <!-- our protfolio -->
 <div class="container-fluid text-center py-3">
     <div class="protfolio_title">
         <h1 class="p-3 display-3">Pr<span class="servesh_border">otfol</span>o</h1>
     </div>
     <div class="row">
         <?php
         $args = array(
            'post_type'=>'portfolio',
         );
         $query = new WP_Query( $args );
         if($query->have_posts()):
            while($query->have_posts()):$query->the_post(); ?>

            <div class="col-md-4">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full',array('class'=>'single_protfolio_image')) ?></a>
            </div>


        <?php endwhile;
         endif;
         ?>   
     </div>
 </div>
 <!-- our protfolio END -->
<!-- our blog post -->
<div class="container-fluid">
    <div class="blog_post_title text-center">
        <h1 class="display-3 p-3 "><span class="servesh_border">BLOG</span></h1>
    </div>
    <div class="row">
         <?php 
         $args = array(
            'post_type'   => 'post',
            'post_status' => 'all_posts',
            'post__in' => get_option('sticky_posts'),
         );
         $query = new WP_Query( $args );
         if($query->have_posts()):
            while($query->have_posts()):$query->the_post(); ?>

                <div class="col-md-6">
                <div class="media">
                    <?php the_post_thumbnail( 'medium', array('class'=>'blog_post_thumbonal_image p-2') ) ?>
                    <div class="media-body">
                        <h2 class="mt-0"><?php the_title() ?></h2>
                        <p>Posted By <?php echo get_the_author_posts_link() ?> On <?php echo get_the_date() ?></p>
                        <?php echo content(30) ?>
                    </div> 
                </div>
                </div>

        <?php endwhile;
        endif;
         ?>
    </div>
</div>
<!-- our blog post END -->
<!-- Youtybe vider -->
<div class="container my-3">
    <div class="youtube_title text-center">
        <h1 class="display-3 p-3"><span class="servesh_border">YOUTUBE</span></h1>
    </div>
    <div class="video">
    <iframe style="width:100%; height:600px;" src="https://www.youtube-nocookie.com/embed/RawX_CsBQq8?start=60" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<!-- Youtybe vider End -->
<!-- footer widget -->
        <?php get_template_part( '/template-parts/footerwigets' ) ?>
<!-- footer widgetEnd -->




<?php get_footer() ?>