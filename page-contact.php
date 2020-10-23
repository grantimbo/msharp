<?php get_header(); ?>
<?php get_template_part('head-nav'); ?>

<section class="spacer">
    <div class="container w-50">
        <h1>Get in touch with Monchel.</h1>
        <p>Feel free to get in touch with your query. Please note, we get quite a lot of messages, so please don’t feel we are ignoring you. We can take up to 5 working days to respond – and this could take longer during busier periods.</p>

        <?php if (have_posts()): while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
    </div>
</section>


<?php get_footer(); ?>