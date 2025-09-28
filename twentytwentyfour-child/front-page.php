<?php
/**
 * Template Name: Custom Homepage
 * Description: Roma Bros Homepage
 */

get_header(); ?>

<main id="main" class="site-main">

    <?php 
    // Hero Section
    get_template_part( 'template-parts/hero' ); 


    // About Us Section
    get_template_part( 'template-parts/image-with-text' ); 
    
    ?>

</main>

<?php get_footer(); ?>
