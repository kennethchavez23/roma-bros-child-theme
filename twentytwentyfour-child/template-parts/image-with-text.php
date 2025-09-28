<section class="about-us" id="why-roma">
    <div class="container">
        <div class="column">
            <?php if ($img = get_field('about_image')): ?>
                <img src="<?php echo esc_url($img['url']); ?>" width="750px" height="auto" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
        </div>

        <div class="column">
            <h2><?php the_field('about_title'); ?></h2>
            <p><?php the_field('about_description'); ?></p>
            <div class="icon-box">
                <?php if ($icon = get_field('about_icon')): ?>
                    <img src="<?php echo esc_url($icon['url']); ?>">
                <?php endif; ?>
                <div class="img-contents">
                    <h3><?php the_field('about_icon_title'); ?></h3>
                    <p><?php the_field('about_icon_description'); ?></p>
                </div>
            </div>
            <?php
            $button_text = get_field('about_button_text');
            $button_link = get_field('about_button_link');
            if ($button_text && $button_link):
            ?>
                <a class="outline-btn" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_text); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

