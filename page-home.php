<?php get_header(); ?>
<?php get_template_part('head-nav'); ?>

<section class="container spacer">
    <div class="row">
        <div class="col-7 d-flex align-items-center">
            <div class="mr-3">
                <h1 class="mb-3">Transition Through!</h1>
                <p>Monchel Sharp is a lighthearted, loving and joyous individual, who at the age of 22 made the life shifting decision to choose herself over the painful challenging circumstances presented by life. By making the decision, Monchel was able to tap into her potential to unlock the keys to the Kingdom, reclaiming her power and ability to respond to life with a calm mind.</p>
                <p>Studying the Kingdom teachings of the Book of Life and Dr. Myles Munroe, Monchel discovered her purpose for living, which was affirmed by continued mindset sharpening through studying the likes of John C. Maxwell, Parnell M. Lovelace Jr., Norman Vincent Peale, Iyanla Vanzant and Les Brown. For nearly a decade, she has committed to empowering and teaching individuals to recognize their equipping, in order to transition through [challenges and change] and live life with freedom.</p>
                <a class="btn btn-primary btn-lg" href="<?php echo home_url(); ?>/about">Read More</a>
            </div>
        </div>
        <div class="col-5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/monchel-home.jpg" class="img-fluid shadow-lg p-3 mb-5 bg-white rounded" alt="">
        </div>
    </div>
</section>


<section class="bgLightgray spacer text-center">
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

<section class="spacer bg-light">
    <div class="container w-75">
        <div class="row">
            <div class="col-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/free-ebook.png" class="img-fluid">
            </div>
            <div class="col-7 d-flex align-items-center">
                <div class="mr-3">
                    <h1>Monchel’s Free Gift To You</h1>
                    <p>Gain Control of Your Life. 7 Empowerment Keys to Help You Transition Through.</p>
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Free Gift"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="text-center spacer">
    <div class="container w-50">
        <h1 class="mb-5 border-bottom d-inline pb-1">Testimonials</h1>
        <p style="font-size: 1.4rem; margin-top: 3rem">"What a brilliant experience it has been working with Monchel. Here ability to highlight and activate the greatness within others is unmatched by any."</p>
        <b style="font-size: 1rem;" class="mb-5">- Junior I. Miller</b>
        <p style="font-size: 1.4rem; margin-top: 3rem">"Monchel is a class act. It takes a special kind of person to bring out and stimulate ones true potentials, and she does that and more. The passion that accompanies her work is admirable."</p>
        <b style="font-size: 1rem;">- Morrice S. Baker</b>
    </div>
</section>

<?php get_footer(); ?>