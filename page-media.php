<?php get_header(); ?>
<?php get_template_part('head-nav'); ?>

<section class="container spacer text-center">
    <div class="container">
        <h1 class="mb-5">Media</h1>
        <div class="row">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/media1.png" class="img-fluid" alt="">
                <h4>Facebook</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, repudiandae.</p>
                <a class="btn btn-primary btn-lg" href="<?php echo home_url(); ?>/about">Book Now</a>
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/media2.png" class="img-fluid" alt="">
                <h4>Instagram</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, repudiandae.</p>
                <a class="btn btn-primary btn-lg" href="<?php echo home_url(); ?>/about">Book Now</a>
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/media3.png" class="img-fluid" alt="">
                <h4>Youtube</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, repudiandae.</p>
                <a class="btn btn-primary btn-lg" href="<?php echo home_url(); ?>/about">Book Now</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>