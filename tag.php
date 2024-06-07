<?php get_header(); ?>
<?php get_template_part('hero','slider'); ?>
<div class="archive-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4 py-4 text-danger">
            <h1>Post under <?php single_tag_title(); ?></h1>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
    <?php if(is_active_sidebar('mostak-right-sidebar')): ?>
        <div class="col-md-8">
    <?php else: ?>
        <div class="col-md-10 offset-md-1">
    <?php endif; ?>

<div class="posts ">
<?php while(have_posts()){
    the_post(); ?>
 
 <div class="post ">
        <div class="container">
            <div class="row">
                <div class="col-md-12  ">
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
                    <?php wp_link_pages(); ?>
                    
              

                    
                    <?php /* if(comments_open()){
                        comments_template();
 
                    } */ ?> 

                    
                </div>
                    <div class="auther-info">
                        <div class="row">
                            <div class="col-md-2">
                                <?php echo get_avatar(get_the_author_meta("id")) ?>

                            </div>
                            <div class="col-md-10">
                                <h3><?php echo get_the_author_meta('display_name') ?></h3>
                               <p> <?php echo get_the_author_meta('description') ?></p>

                            </div>
                        </div>
                    </div>

                <h4>
                 <p><?php next_post_link(); ?></p>
                    <p><?php previous_post_link() ?></p>
                 </h4>
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