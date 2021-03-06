<div class="container">
    <header class="head">
        <button class="menu-toggle" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>
        
        <a href="<?php home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/mslogo.png" alt="" class="logo"></a>

        <div class="tae">
            <nav class="menu-nav">
                <?php get_template_part('menu-links'); ?>
            </nav>
            <nav class="social-head">
                <a target="_blank" href="https://www.facebook.com/monchel.sharp"><i class="fab fa-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/monchelsharp/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCWRh9wPb2tnPeH-BqZqvj_A"><i class="fab fa-youtube"></i></a>
            </nav>
            <div class="menu-shadow" onclick="toggleMenu()"></div>
        </div>
    </header>
</div>