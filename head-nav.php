<div class="container-lg">
    <header class="head">
        <button class="menu-toggle" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>
        
        <a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/jmiller-logo.png" alt="" class="logo"></a>

        <div class="tae">
            <nav class="menu-nav">
                <?php get_template_part('menu-links'); ?>
            </nav>
            <nav class="social-head">
                <a target="_blank" href="https://www.linkedin.com/in/junior-ian/"><i class="fab fa-linkedin"></i></a>
                <a target="_blank" href="https://www.instagram.com/its_mr_miller/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://www.facebook.com/mrjuniormiller/"><i class="fab fa-facebook"></i></a>
                <a target="_blank" href="https://twitter.com/its_mr_miller"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCWZxx3u1iU1CSDyoa5PTLug?view_as=subscriber"><i class="fab fa-youtube"></i></a>
            </nav>
            <div class="menu-shadow" onclick="toggleMenu()"></div>
        </div>
    </header>
</div>