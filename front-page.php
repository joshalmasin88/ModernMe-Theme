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

<section id="hero" style="background-color: #080808">
    <div class="container py-5" style="height: 100vh">
        <div class="row h-100 d-flex align-items-center">
            <div class="col">
                <h1 class="display-1" style="font-weight: bolder">
                    Create an awesome design portfolio
                </h1>
                <div style="border: 5px solid #fff; width: 20%"></div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum,
                    magnam.
                </p>
                <button class="btn btn-lg btn-secondary">READ MORE</button>
            </div>
        </div>
    </div>
</section>

<section id="work">
    <div class="container" style="min-height: 100vh">
        <div class="row">
            <div class="col-md-6">
                <p>THIS WILL BE CUSTOM POST TYPES</p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container" style="min-height: 50vh">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="./bit.png" alt="" />
            </div>
            <div class="col-md-6">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <div class="d-flex align-items-center">
                    <span><i class="fa-solid fa-star"></i></span>
                    <div class="col ms-3">
                        <h5 style="font-weight: 900">Lorem, ipsum dolor.</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Enim, placeat.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span><i class="fa-solid fa-star"></i></span>
                    <div class="col ms-3">
                        <h5 style="font-weight: 900">Lorem, ipsum dolor.</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Enim, placeat.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span><i class="fa-solid fa-star"></i></span>
                    <div class="col ms-3">
                        <h5 style="font-weight: 900">Lorem, ipsum dolor.</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Enim, placeat.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span><i class="fa-solid fa-star"></i></span>
                    <div class="col ms-3">
                        <h5 style="font-weight: 900">Lorem, ipsum dolor.</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Enim, placeat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" style="min-height: 50vh">
    <div class="container">
        <div class="row d-flex align-content-center h-100">
            <div class="col">
                <h2>Frequently Asked Questions</h2>
                <p>WIDGET FOR ACCORDIAN WILL GO HERE</p>
            </div>
        </div>
    </div>
</section>

<section id="midbanner">
    <div class="container" style="min-height: 40vh">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Your Banner Here</h2>
                <p>Text For Your Banner Here</p>
            </div>
        </div>
    </div>
</section>





<?php
get_footer();