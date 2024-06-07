<?php get_header(); ?>

<?php get_template_part('hero','slider'); ?>

<div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                   <h2><?php  the_title(); ?></h2>
                   <?php the_post_thumbnail('large',array('class'=>'img-fluid')); ?>
                    <?php the_content(); ?>

                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
