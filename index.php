<?php get_header(); ?>
<?php get_template_part('hero','slider'); ?>


<div class="posts">
<?php while(have_posts()){
    the_post(); ?>

 <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <a href="  <?php the_permalink(); ?> "> <h2 class="post-title"><?php the_title() ; ?></h2> </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong> <?php the_author(); ?> </strong><br/>
                        <?php echo get_the_date('dS M Y'); ?>
                    </p>
                    <?php the_category(); ?>

                    <?php  echo get_the_tag_list('<ul class="list-unstyled">
                        <li>', '<li> </li>', '</li></ul>'); ?>

                        <?php 
                        $deshicons_here = get_post_format();
                        if ($deshicons_here == 'image') {
                           echo '<span class="dashicons dashicons-format-image"></span>';
                        }elseif ($deshicons_here == 'video'){
                            echo '<span class="dashicons dashicons-format-video"></span>';
                        }elseif ($deshicons_here == 'audio'){
                            echo '<span class="dashicons dashicons-format-audio"></span>';
                        }elseif ($deshicons_here == 'links'){
                            echo '<span class="dashicons dashicons-admin-links"></span>';
                        }elseif ($deshicons_here == 'aside'){
                            echo '<span class="dashicons dashicons-format-aside"></span>';
                        }
                        ?>

                   

                       
                </div>
                <div class="col-md-8">
                    <p>
                        <?php the_post_thumbnail('our_image'); ?>
                    </p>
                
                    <?php 
                        if(post_password_required()){
                            echo get_the_password_form();
                        }else{
                            the_excerpt();
                        };
                    ?>


                    
                </div>
            </div>

        </div>

<?php } ?>
 
</div>

<?php get_footer(); ?>