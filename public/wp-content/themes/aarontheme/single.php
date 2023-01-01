<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Aaron G. Miller | Choreographer</title>

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#2e2e2e">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#2e2e2e">

        <?php wp_head() ?>
    </head>
    <body>
        <?php wp_body_open() ?>
        <div class="hide-overflow-x">
            <header>
                <a href="/"><h1><strong>Aaron G. Miller</strong> | Choreographer</h1></a>
                <nav>
                    <button id="hamburger" aria-label="closed">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </button>
                    <ul>
                        <li><a href="#workshops">Workshops</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#news">News</a></li>
                    </ul>                
                </nav>
                <div class="headline-button-wrapper">
                
                <?php
                    $hero_headline_query = new WP_Query( array( 'p' => 62 ));
                    if( $hero_headline_query->have_posts() ) {
                        while( $hero_headline_query->have_posts() ) {
                            $hero_headline_query->the_post(); // iterate the post here
                ?>


                <h2><?php the_title(); ?> but on a single page!</h2>

                <?php
                    }
                }
                ?>

                    <a href="#" class="button">Book Workshop</a>
                </div>
            </header>

            <main>
                <?php if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        the_title();
                        the_content();
                    }
                } ?>
            </main>
    
            <footer>
                <div class="footer-container">
                    <h4 class="item-1">Thank you for your interest in Art!</h4>
                    <p class="item-2">© 2004 – <?php echo date("Y"); ?>  Aaron G. Miller</p>
                    <a href="#" class="item-3">Imprint & Privacy</a>
                </div> 
            </footer>
        </div>

        <script src='<?php echo get_template_directory_uri() ?>/main.js' type="module"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                MainNav.init();
            });
        </script>
    <?php wp_footer() ?>
</body>
</html>