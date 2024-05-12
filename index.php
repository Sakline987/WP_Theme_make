<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!-- <title> <?php bloginfo ('name');  ?> | <?php bloginfo ('description'); ?> </title>              just for memorised it    --> 

    <?php wp_head(); ?>
</head>
<body>




 <!--                                just for memorised
<?php while(have_posts()) {
    the_post(); ?>

<div class="blog-post">
    <h2> <?php the_title(); ?> </h2>
    <?php the_content(); ?>
</div>
   
<?php  };?>                           end here-->                    

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"> <?php bloginfo('description'); ?> </h3>
                <h1  style="font-size:4rem" class="align-self-center display-1 text-center heading"> <?php bloginfo('name'); ?> </h1>
            </div>
        </div>
    </div>
</div>
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

                    <?php  echo get_the_tag_list('<ul class="list-unstyled">
                        <li>', '<li> </li>', '</li></ul>'); ?>

                    
                </div>
                <div class="col-md-8">
                    <p>
                        <?php the_post_thumbnail('our_image'); ?>
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
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; WEB IT LTD - All Rights Reserved
            </div>
        </div>
    </div>
</div>

    <?php wp_footer(); ?>
</body>
</html>