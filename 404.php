<?php get_header(); ?>
<div class="head bg-primary">
    <div class="container">
        <h1 class="pt-5 pb-5 mb-3 text-white">404 Not Found</h1>
    </div>
</div>
<div class="container">
    <div class="p-5 mb-3 bg-light">
		<h3>Apologies</h3>
		<p>The page you are looking for does not exist. <br>It may have been moved, or removed altogether. <br>You may return to the <a color="#ccc" href="<?php echo home_url(); ?>"><?php _e( 'home page.', 'tariku' ); ?></a></p>
    </div>
</div>
<?php wp_footer(); ?>