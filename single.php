<?php get_header(); ?>
<?php get_template_part('hero','slider'); ?>


<div class="posts">
<?php while(have_posts()){
    the_post(); ?>
 
 <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                  <h2 class="post-title"><?php the_title() ; ?></h2>
                  <p>
                        <strong> <?php the_author(); ?> </strong><br/>
                        <?php echo get_the_date('dS M Y'); ?>
                    </p>
                </div>
            </div>
       
                <div class="col-md-10 offset-md-1">
                    <p>
                        <?php the_post_thumbnail('large',array('class'=>'img-fluid')); ?>
                    </p>
                    <p> <?php if (is_single()) {
                        the_content();
                    } else the_excerpt();
                    
                    ?></p>

                    
                </div>
            </div>

        </div>

<?php } ?>
 
</div>

<?php get_footer(); ?>