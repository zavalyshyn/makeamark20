<?php
/*
* Template Name: Page Nos Produits
*/

get_header();
?>


<section class="main">
        <video autoplay="true" muted="true">
            <source src="assets/img/bg.mp4" type="video/mp4">
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
    </section>


    <section class="walk" id="section-walks">
        <h2>Themes</h2>
        <p>Description of all themes</p>

        <article>
            <img src="theme.png" alt="theme img" />
            <div class="walk-desc">
                <h3>Theme Name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis repellendus laborum
                    provident at ipsa</p>
                <a href="#" class="btn">Book a walk</a>
            </div>
        </article>

        <article>
            <img src="theme.png" alt="theme img" />
            <div class="walk-desc">
                <h3>Theme Name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis repellendus laborum
                    provident at ipsa</p>
                <a href="#" class="btn">Book a walk</a>
            </div>
        </article>

        <article>
            <img src="theme.png" alt="theme img" />
            <div class="walk-desc">
                <h3>Theme Name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perferendis repellendus laborum
                    provident at ipsa</p>
                <a href="#" class="btn">Book a walk</a>
            </div>
        </article>

        <a class="btn">View more</a>
    </section>

    <section class="Tours" id="section-tours">
        <h2>Tours</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam recusandae debitis et modi sed maxime eius
            veritatis quam nisi vitae animi molestiae libero fugiat, architecto ut officiis ipsa ex. Vel.</p>

        <div class="tour-types">
            <article>
                <img src="tour.png" alt="Tours">
                <h2>Open tours</h2>
            </article>
            <article>
                <img src="tour.png" alt="Tours">
                <h2>Open tours</h2>
            </article>
            <article>
                <img src="tour.png" alt="Tours">
                <h2>Open tours</h2>
            </article>
        </div>
    </section>
    <section class="newsletter" id="section-newsletter">
        <form action="#">
            <label for="email">
                <input type="email" name="email" id="email">
            </label>
        </form>
    </section> 

<?php
get_footer();