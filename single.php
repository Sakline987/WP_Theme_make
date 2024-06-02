<?php get_header(); ?>
<?php get_template_part('hero','slider'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
        
<div class="posts ">
<?php while(have_posts()){
    the_post(); ?>
 
 <div class="post ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                  <h2 class="post-title"><?php the_title() ; ?></h2>
                  <p>
                      
                        <?php echo get_the_date('dS M Y'); ?>
                    </p>
                </div>
            </div>
       
                <div class="col-md-12 ">
                    <p>
                        <?php the_post_thumbnail('large',array('class'=>'img-fluid')); ?>
                    </p>
                    <p> <?php the_content();?></p>
                    
                 <h4>
                 <p><?php next_post_link(); ?></p>
                    <p><?php previous_post_link() ?></p>
                 </h4>

                    
                    <?php /* if(comments_open()){
                        comments_template();
 
                    } */ ?> 

                    
                </div>
            </div>

        </div>

<?php } ?>
 
</div>
        </div>
            <div class="col-md-4 ">
            <?php 
            if (is_active_sidebar('mostak-right-sidebar')) {
                dynamic_sidebar('mostak-right-sidebar');
            }?>
            
            </div>
        </div>
</div>


<?php get_footer(); ?>