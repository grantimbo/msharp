<?php get_header(); ?>

<section class="imgCover about">

    <?php get_template_part('head-nav'); ?>

    <section class="container-lg">
        <div class="content">
            <h1 class="mb-3"><?php the_title(); ?></h1>
        </div>
    </section>
</section>


<section class="bggray p-4">
    <div class="container-lg">
        <div class="p-5 bg-white">
            <?php if (have_posts()): while (have_posts()) : the_post();
                $thecontent = get_the_content();
                if(!empty($thecontent)) {
                    echo $thecontent;
                } else {
                    echo 'Sorry, no contents were found.';
                };
            endwhile; endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>