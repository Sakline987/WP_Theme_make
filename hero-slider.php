<body <?php body_class(array('aam','jam','kola')); ?>>   
    <div class="header-logo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-logo p-2">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>             
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"> <?php bloginfo('description'); ?> </h3>
                <h1  style="font-size:4rem" class="align-self-center display-1 text-center heading"> <a href=" <?php bloginfo('url'); ?> "> <?php bloginfo('name'); ?> </a> </h1>
               <div class="navigation">
               <?php
                 wp_nav_menu(
                    array(
                        'theme_location'    =>  'header-menu',
                        'menu_id'           => 'for check',
                        'menu_class'        =>'list-inline text-center d-flex justify-content-end',

                 )
                );
                 ?>
               </div>
            </div>
        </div>
    </div>
</div>