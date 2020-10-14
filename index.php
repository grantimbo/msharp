<?php get_header(); ?>

<section class="imgCover blog">

    <?php get_template_part('head-nav'); ?>

    <section class="container-lg">
        <div class="content">
            <h1 class="mb-3">Blog</h1>
        </div>
    </section>
</section>


<section class="bggray p-4">
    <div class="container-lg">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="p-5 mb-3 bg-white">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>


<?php get_footer(); ?>