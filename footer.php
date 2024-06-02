<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <?php
               if(is_active_sidebar('footer-widget')){
                dynamic_sidebar('footer-widget');
               }
               ?>
            </div>
        </div>
    </div>
</div>

    <?php wp_footer(); ?>
</body>
</html>