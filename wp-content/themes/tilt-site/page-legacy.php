<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('motion'); ?>

<header class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
                    <source id="header-video" src="<?php echo get_template_directory_uri(); ?>/video/test-video.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--no-italic">Motion</p>
            <h1>BP<br />
                <span class="light underlined">Legacy - Steve Jobs</span>
            </h1>
            <h2 class="light">Motion | 3D</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Challenge</h2>
                <p class="first-para">BP asked us to create a powerful, emotive film for their Global Leadership event, all about building a lasting legacy. But what kind of story could inspire BP’s top 500 leaders? </p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The solution</h2>
                <p class="first-para">Bring the story of an iconic business figure to life. Use motion graphics to create an epic storybook feel, and use film to add direct, personal insights from BP leaders. </p>
            </div>
        </div>
    </div>
</header>

<div class="container container--half-top">
    <div class="group-container">
        <div class="group group--right">
            <div class="module module--2-2">
                <div class="ratio" style="background-image: url('<?php get_template_directory_uri(); ?>/images/video-placeholder.jpg')">
                </div>
            </div>
        </div> <!-- /end group -->
        <div class="group group--left">
            <div class="module module--1-1"></div>
            <div  class="module module--1-1"></div>
            <div class="module module--2-1"></div>
        </div> <!-- /end group -->
    </div> <!-- /end group-container -->
    <div class="group-container">
        <div class="group group--left">
            <div class="module module--2-2">
                <div class="ratio" style="background-image: url('<?php get_template_directory_uri(); ?>/images/video-placeholder.jpg')">
                </div>
            </div>
        </div> <!-- /end group -->
        <div class="group group--right">
            <div class="module module--1-1"></div>
            <div  class="module module--1-1"></div>
            <div class="module module--2-1"></div>
        </div> <!-- /end group -->
    </div> <!-- /end group-container -->
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <h2 class="underlined">What we did</h2>
                        <p class="first-para">Leadership is about dealing with setbacks as much as it is about success. Initially we created a series of films featuring iconic leaders from around the world. But we then decided to focus solely on Steve Jobs because his personality, leadership style and rollercoaster ride to the top have all the ingredients for a compelling story.</p>
                    </div>
                </div>
                <div class="module module--2-1"></div>
            </div>
            <div class="group group--right">
                <div class="module module--2-2"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 area-dark">
                    <div class="module__text">
                        <p>We blended together 2D, 3D and live action film to tell the story of Steve Job’s legacy, interspersed with BP leaders sharing their views on what makes a great leader. The film created a buzz during the event, and has been viewed many times within BP as an example for leaders, new and old. </p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1"></div>
                <div class="module module--1-1"></div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="group-container">
    <a class="project-navigation" href="">< Previous Project</a>
    <a class="project-navigation" href="">Next Project ></a>
</div>

</div>

<?php get_footer(); ?>
