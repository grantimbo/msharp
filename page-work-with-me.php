<?php get_header(); ?>
<?php get_template_part('head-nav'); ?>

<section class="container spacer text-center">
    <div class="container">
        <h1 class="mb-5">Work With Monchel Sharp</h1>
        <div class="row">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/learn1.jpg" class="img-fluid shadow-lg p-3 mb-5 bg-white rounded" alt="">
                <h4>Speaking Engagement</h4>
                <p>Booking Monchél means you are ready to take things to the next level. It’s great to see that you have decided to step into a better version of you.</p>
                <a class="btn btn-primary btn-lg" href="<?php echo home_url(); ?>/contact">Book Now</a>
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/learn3.jpg" class="img-fluid shadow-lg p-3 mb-5 bg-white rounded" alt="">
                <h4>Coaching & Consulting</h4>
                <p>What would this world be without our loved ones ? Families are the core of life and happiness. Putting your family first means choosing happiness.</p>
                <a class="btn btn-primary btn-lg" href="<?php echo home_url(); ?>/contact">Book Now</a>
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/learn2.jpg" class="img-fluid shadow-lg p-3 mb-5 bg-white rounded" alt="">
                <h4>Monchél’s Courses</h4>
                <p>A life changing experience and an investment worth making. As the best investment is the investment you make in you.</p>
                <a class="btn btn-primary btn-lg" href="<?php echo home_url(); ?>/contact">Book Now</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>