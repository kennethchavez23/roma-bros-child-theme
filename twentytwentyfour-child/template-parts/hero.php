<!-- <section class="hero">
    <div class="container">
        <h1><?php the_field('hero_title'); ?></h1>
        <p><?php the_field('hero_subtitle'); ?></p>
        <?php if( get_field('hero_button_text') ): ?>
            <a href="<?php the_field('hero_button_link'); ?>" class="btn">
                <?php the_field('hero_button_text'); ?>
            </a>
        <?php endif; ?>
    </div>
</section> -->



<section class="hero" id="home">
    <div class="container">
        <div class="column">
            <?php 
            $logo = get_field('hero_logo');
            $title = get_field('hero_title');
            $subtitle = get_field('hero_subtitle');
            $button_text = get_field('hero_button_text');
            $button_link = get_field('hero_button_link');

            if ($logo) {
                echo '<img src="' . esc_url($logo['url']) . '" width="95px" height="83px">';
            }
            if ($title) {
                echo '<h1>' . esc_html($title) . '</h1>';
            }
            if ($subtitle) {
                echo '<p>' . esc_html($subtitle) . '</p>';
            }
            if ($button_text && $button_link) {
                echo '<a class="outline-btn" href="' . esc_url($button_link) . '">' . esc_html($button_text) . '</a>';
            }
            ?>
        </div>
    </div>
    <?php 
    $bg = get_field('hero_background_image');
    if ($bg) {
        echo '<img src="' . esc_url($bg['url']) . '" width="900px" height="700px">';
    }
    ?>
</section>



