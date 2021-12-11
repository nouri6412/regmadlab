<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Ipak_Madlab
 * @since 1.0.0
 * Template Name: Homepage
 */

get_header();

?>
<div class="main">
    <div class="main-item main-side-bar">
        <a>ماشین سازی اواکو</a>
        <a>ماشین سازی سبلان</a>
    </div>
    <div class="main-item main-content row">
        <?php
        $category = get_category_by_slug('concrete-block-machine');

        $args = array(
            'type'                     => 'post',
            'child_of'                 => $category->term_id,
            'orderby'                  => 'name',
            'order'                    => 'ASC',
            'hide_empty'               => FALSE,
            'hierarchical'             => 1,
            'taxonomy'                 => 'category',
        );
        
        $categories = get_categories($args);
        get_template_part('template-parts/header/cats',null,array("categories"=>$categories));
        ?>
        <?php
        $args = array('category' => the_ID(), 'posts_per_page' => 5);
        $myposts = get_posts($args);
        foreach ($myposts as $post) :    setup_postdata($post);
        ?>
        <?php endforeach; ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/1.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        1 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/2.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        2 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/3.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        3 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/1.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        4 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/5.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        5 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/6.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        6 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/7.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        7 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
            <div class="product-item-content img-zoom">
                <div class="product-item-content-img">
                    <a href="#"><img src="img/product/8.webp" /></a>
                </div>
                <a href="#">
                    <h4 class="product-item-content-title">
                        8 دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                    </h4>
                </a>

                <div class="product-item-content-desc"> دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه
                    بلوک زنی تخم گذار با قابلیت حمل در فاصله ها دستگاه بلوک زنی تخم گذار با قابلیت حمل در فاصله ها
                </div>

            </div>
        </div>

    </div>


</div>
<?php

get_footer();
