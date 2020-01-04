<?php get_header();?>

<section class="landing">
    <img src="<?php the_post_thumbnail_url('');?>" class="landing-background" alt="Wildebras Clothing">
    
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
    <?php endwhile; else: endif;?>

    <div class="button-container--landing">
        <a href="" class="button">CONTINUE</a>
    </div>
</section>

<section class="section--padding intro">
    <h2><?php echo get_bloginfo('name'); ?></h2>
    <h4><?php echo get_bloginfo('description'); ?></h4>
</section>

<section class="scroll-wrapper" id="scrollWrapper">
    <ul class="grid-container">
        <li>
            <img class="background-img" src="<?php bloginfo('template_directory');?>/images/bg1.jpg" alt="Adidas outerwear">
        </li>
        <li>
            <img class="front-img" src="<?php bloginfo('template_directory');?>/images/img1.jpg" alt="Adidas outerwear">
        </li>
        <li>
            <div class="vintage-catalog-text">
                <h5>Quality never goes out of style</h5>
                <p>High-end brands such as Adidas, Nike, Tommy Hilfiger, you name it! We have authentic pieces from the coolest fashion eras that are no longer in production.</p>
            </div>
        </li>
        <li>
            <div class="button-container">
                <a href="" class="button button--small">VIEW BRANDS</a>
            </div>
        </li>
    </ul>

    <ul class="grid-container">
        <li>
            <img class="background-img" src="<?php bloginfo('template_directory');?>/images/bg2.jpg" alt="Hummel outerwear">
        </li>
        <li>
            <img class="front-img" src="<?php bloginfo('template_directory');?>/images/img2.jpg" alt="Hummel outerwear">
        </li>
        <li>
            <div class="vintage-catalog-text">
                <h5>Rock our boldest outerwear</h5>
                <p>Standing out from the crowd has never been so simple! Pick anything from neon windbreakers to faux-fur jackets and anything in-between. </p>
            </div>
        </li>
        <li>
            <div class="button-container">
                <a href="" class="button button--small">VIEW OUTERWEAR</a>
            </div>
        </li>
    </ul>

    <ul class="grid-container grid-container--fullwidth">
        <li>
            <img class="background-img" src="<?php bloginfo('template_directory');?>/images/bg3.jpg" alt="Hummel outerwear">
        </li>
        <li>
            <img class="front-img" src="<?php bloginfo('template_directory');?>/images/img3.jpg" alt="Hummel outerwear">
        </li>
        <li>
            <div class="vintage-catalog-text">
                <h5>Character in all shapes and forms</h5>
                <p>With our range of different patterns and textures, your outfit will totally turn heads.</p>
            </div>
        </li>
        <li>
            <div class="button-container">
                <a href="" class="button button--small">VIEW OUTERWEAR</a>
            </div>
        </li>
    </ul>
</section>


<?php get_footer();?>