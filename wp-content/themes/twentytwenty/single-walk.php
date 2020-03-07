<?php
/*
* Template Name: Single Walk
* Template Post Type: walk
*/

get_header();
?>
<section class="main">
    <video autoplay="true" muted="true" loop>
        <source src="assets/img/bg.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="copy">
        <h1><?= get_the_title(); ?></h1>
        <p class="white"> PWR highlights women with their own company or project. We walk past various places .</p>
        <div class="header-ctas">
            <!-- <a href="#" class="btn btn-alt">Alt Cta</a> -->
            <a href="#" class="btn btn-main">Book a walk</a>
        </div>
    </div>
    <img class="bluepipe" src="/assets/img/bluepipe.svg" alt="Blue pipe">
</section>
<section class="pink">
    <article>
        <h2>Neighbourhood</h2>
        <p>
            Sablon > Marolles <br/>
            Sablon > Center <br/>
            Downtown Dansaert
        </p>
    </article>
    <article>
        <h2>Nice to know</h2>
        <p>
            Ideal between 11h and 19h.<br />
            Weekend possible. Less recommended on Mondays.
        </p>
    </article>
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
        <article>
            <div class="walk-img-container">
                <img src="/assets/img/gp.webp" alt="theme img" />
            </div>
            <div class="walk-desc">
                <h3>Theme Name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis repellendus laborum
                    provident at ipsa</p>
                <a href="#" class="btn">Book a walk</a>
            </div>
        </article>
</section>
<?php
get_footer();