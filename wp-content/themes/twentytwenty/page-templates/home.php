<?php
/*
* Template Name: Page Nos Produits
*/

get_header();
?>

<section class="main">
        <video autoplay="true" muted="true" loop>
            <source src="wp-content/themes/twentytwenty/assets/images/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="copy">
            <h1>Brussels walks by experience</h1>
            <p class="white"> PWR highlights women with their own company or project. We walk past various places .</p>
            <div class="header-ctas">
                <!-- <a href="#" class="btn btn-alt">Alt Cta</a> -->
                <a href="#" class="btn btn-main">Book a walk</a>
            </div>
        </div>
        <img class="bluepipe" src="wp-content/themes/twentytwenty/assets/images/bluepipe.svg" alt="Blue pipe">
</section>


<section class="walk" id="section-walks">
    <div class="section-intro">
        <h2>Themes</h2>
        <p>Our guided tours promote Brussels positively
                at home and abroad by offering an authentic experience. Book a walk with us and discover
                with us which female entrepreneurs are doing
                the trick, how do microbreweries revive, what initiatives are making living more sustainable
                and how is life here today in general.</p>
    </div>
<<?php
    $args_sf = array(
        'post_type' => 'walk',
        'posts_per_page' => -1,
        'suppress_filters' => 0,
        'order' => 'ASC'
    );
    $loop = new wp_Query($args_sf);
    while($loop->have_posts()) : $loop->the_post(); ?>
    <!-- <a href="<?= get_permalink(); ?>" class="grid-item block block-simple block-did-u-know">
        <div class="img-block">
            <?= get_the_post_thumbnail($post->ID, 'category-thumb'); ?>
        </div>
        <div class="link-card"><?= the_title(); ?></div>
    </a> -->
    <article>
        <div class="walk-img-container">
            <img src="<?= get_the_post_thumbnail_url($post->ID) ?>" alt="theme img" />
        </div>
        <div class="walk-desc">
            <h3><?= the_title(); ?></h3>
            <p><?= get_field('walk_description')?>)</p>
            <a href="<?= get_permalink(); ?>" class="btn">Book a walk</a>
        </div>
    </article>

    <?php
    endwhile;
    wp_reset_query();
 ?>


    <!-- <article>
        <div class="walk-img-container">
                <img src="wp-content/themes/twentytwenty/assets/images/gp.webp" alt="theme img" />
        </div>
        <div class="walk-desc">
            <h3>Theme Name</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis repellendus laborum
                provident at ipsa</p>
            <a href="#" class="btn">Book a walk</a>
        </div>
    </article>

    <article>
            <div class="walk-img-container">
                    <img src="wp-content/themes/twentytwenty/assets/images/gp.webp" alt="theme img" />
            </div>
            <div class="walk-desc">
                <h3>Theme Name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis repellendus laborum
                    provident at ipsa</p>
                <a href="#" class="btn">Book a walk</a>
            </div>
        </article> -->

    <a href="#" class="btn btn-alt">View more</a>
    <img src="wp-content/themes/twentytwenty/assets/images/pinkpipeleft.svg" alt="Pink pipe" class="pink-pipe-left">
</section>

<section class="options" id="section-options">
    <div class="section-intro">
        <h2>Our options</h2>
        <p>Are you on your own, coming with a group
                of people or interested in team building or school
                activity? For each walk, there are a lot of possibilities to choose from in our Bazaar
                to go on the road with us.</p>
        </div>
    <div class="tour-types">
        <article>
            <h3>Open tours</h3>
            <p>Type of tour descriptions</p>
            <a href="#" class="btn">Choose a walk</a>
        </article>
        <article>
            <h3>Open tours</h3>
            <p>Type of tour descriptions</p>
            <a href="#" class="btn">Choose a walk</a>
        </article>
        <article>
            <h3>Open tours</h3>
            <p>Type of tour descriptions</p>
            <a href="#" class="btn">Choose a walk</a>
        </article>
        <article>
            <h3>Open tours</h3>
            <p>Type of tour descriptions</p>
            <a href="#" class="btn">Choose a walk</a>
        </article>

    </div>
</section>
<section class="newsletter" id="section-newsletter">
    <p>Don’t miss out on any news. Subscribe for the monthly newsletter!</p>
    <form action="#">
        <label for="email">
            <input type="email" name="email" id="email" placeholder="Enter your email">
        </label>
        <button type="submit" class="btn">Register to the newsletter</button>
    </form>
</section>

<?php
get_footer();
