<?php get_header(); ?>
<?php get_template_part('head-nav'); ?>

<section class="imgCover about d-flex align-items-center">
    <section class="container-lg">
        <div class="content">
            <h1 class="mb-3"><?php the_title(); ?></h1>
        </div>
    </section>
</section>


<main class="page-contact p-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-6">
            <h1>Get in touch with me.</h1>
            <p>Feel free to get in touch with your query. Please note, we get quite a lot of messages, so please don’t feel we are ignoring you. We can take up to 5 working days to respond – and this could take longer during busier periods.</p>

            <?php if (have_posts()): while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>

            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>