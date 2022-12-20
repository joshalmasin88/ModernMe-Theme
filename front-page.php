<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>


<section id="hero"
    style="background-color: <?php echo get_theme_mod('hero-bg-color', '#0e0e0e'); ?>; color: <?php echo get_theme_mod('hero-text-color', '#ffffff'); ?> ">
    <div class="container py-5" style="height: 100vh">
        <div class="row h-100 d-flex align-items-center">
            <div class="col">
                <h1 class="display-1" style="font-weight: bolder">
                    <?php echo get_theme_mod('hero-heading-text',' Modern Me Theme '); ?>
                </h1>
                <div style="border: 5px solid <?php echo get_theme_mod('hero-text-color','#ffffff' ); ?>; width: 20%">
                </div>
                <p>
                    <?php echo get_theme_mod('hero-sub-text', ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum,magnam '); ?>
                </p>
                <a href="<?php echo get_theme_mod('hero-cta-link'); ?>"><button class="btn btn-lg"
                        style="background-color: <?php echo get_theme_mod('hero-cta-color', '#ea004e'); ?>"><?php echo get_theme_mod('hero-cta-text'); ?></button></a>
            </div>
        </div>
    </div>
</section>

<section id="projects" style="background-color: <?php echo get_theme_mod('projects-bg-color', '#0e0e0e'); ?>">
    <div class="container">
        <div class="row equal">

            <?php 
            
            $args = array(
                'post_type' => 'projects',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'orderby' => 'title',
                'order' => 'ASC',
            );

            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();

            $attch_id = get_post_thumbnail_id($post->id);
            $url = wp_get_attachment_image_src($attch_id, 'full');
            $image = get_field('project_image');
        ?>
            <div class="card mb-3 bg-dark text-white me-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $image['url']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo the_title(); ?></h5>
                            <a class="btn btn-lg" href="">Check It Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>


<section id="about" class="py-5">
    <div class="container">
        <div class="row d-flex align-content-center h-100">
            <div class="col-md-6">
                <img class="img-fluid" src="./bit.png" alt="" />
            </div>
            <div class="col-md-6">
                <?php if ( is_active_sidebar( 'about-text-area' )): ?>
                <?php dynamic_sidebar( 'about-text-area' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="faq">
    <div class="container">
        <div class="row d-flex align-content-center h-100">
            <?php if ( is_active_sidebar( 'faq-area' )): ?>
            <?php dynamic_sidebar( 'faq-area' ); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="midbanner" style="background-color: <?php echo get_theme_mod('midbanner-bg-color', '#fff'); ?>; color: <?php echo get_theme_mod('midbanner-text-color', '#000'); ?>;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="display-2"><?php echo get_theme_mod('mid-banner-heading-text', 'Banner Title'); ?></h2>
                <p><?php echo get_theme_mod('mid-banner-text', 'banner text should go here'); ?></p>
            </div>
        </div>
    </div>
</section>





<?php
get_footer();