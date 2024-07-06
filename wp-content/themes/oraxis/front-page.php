<?php get_header(); ?>
<!-- Hero Section Start -->
<?php $banner_slider = get_field('banner_slider');
if (!empty($banner_slider)) { ?>
    <section class="hero-section hero-5">
        <div class="hero-wrapper">
            <div class="swiper hero-slider-2">
                <div class="swiper-wrapper">
                    <?php foreach ($banner_slider as $slider) { ?>
                        <div class="swiper-slide">
                            <div class="hero-items">
                                <div class="hero-image">
                                    <img src="<?php echo $slider['slider_image']['url']; ?>" alt="<?php echo $slider['slider_image']['alt']; ?>">
                                </div>
                                <div class="hero-content">
                                    <h1><?php echo $slider['slider_title']; ?></h1>
                                    <p><?php echo $slider['slider__description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- About Section Start -->
<?php $why_choose_us = get_field('why_choose_us');
if (!empty($why_choose_us)) { ?>
    <section class="about-section fix section-padding" id="about">
        <div class="container">
            <div class="about-wrapper mt-0">
                <div class="row align-items-center">
                    <?php if(!empty($why_choose_us['why_choose_us_image']['url'])){?>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image-2">
                            <img src="<?php echo $why_choose_us['why_choose_us_image']['url']; ?>" alt="<?php echo $why_choose_us['why_choose_us_image']['alt']; ?>">
                        </div>
                    </div>
                    <?php }?>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content style-3">
                            <div class="section-title">
                                <span class="wow fadeInUp"><?php echo $why_choose_us['breadcrumb_title']; ?></span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                    <?php echo $why_choose_us['main_title']; ?>
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 text-white wow fadeInUp" data-wow-delay=".5s">
                                <?php echo $why_choose_us['short_description']; ?>
                            </p>
                            <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <img src="<?php echo $why_choose_us['content_icon']['url']; ?>" alt="<?php echo $why_choose_us['content_icon']['alt']; ?>">
                                </div>
                                <div class="content">
                                    <h3><?php echo $why_choose_us['content_title']; ?></h3>
                                    <p><?php echo $why_choose_us['content_tag_line']; ?></p>
                                </div>
                            </div>
                            <p class="text-white mt-3 wow fadeInUp" data-wow-delay=".8s"><?php echo $why_choose_us['content_short_description']; ?></p>
                            <div class="about-button wow fadeInUp" data-wow-delay=".9s">
                                <a href="<?php echo $why_choose_us['read_more_button']['url']; ?>" class="theme-btn hover-white radius-none padding-style">
                                    <?php echo $why_choose_us['read_more_button']['title']; ?>
                                    <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Counter Section Start -->
<?php /*
<section class="counter-section">
    <div class="container">
        <div class="counter-wrapper-2 section-bg-2">
            <div class="row g-4">
                <div class="col-xxl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="counter-items-2">
                        <div class="icon">
                            <i class="flaticon-room"></i>
                        </div>
                        <div class="content">
                            <h2><span class="count">400</span>+</h2>
                            <p>Team member</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter-items-2">
                        <div class="icon">
                            <i class="flaticon-window-5"></i>
                        </div>
                        <div class="content">
                            <h2><span class="count">800</span>+</h2>
                            <p>Client review</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="counter-items-2">
                        <div class="icon">
                            <i class="flaticon-blueprint-1"></i>
                        </div>
                        <div class="content">
                            <h2><span class="count">100</span>+</h2>
                            <p>Complete project</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="counter-items-2">
                        <div class="icon">
                            <i class="flaticon-layer"></i>
                        </div>
                        <div class="content">
                            <h2><span class="count">40</span>k</h2>
                            <p>Winning award</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
*/ ?>

<!-- Service Section Start -->
<section class="service-section-2 fix section-padding" id="service">
    <div class="container">
        <?php $services = get_field('services');
        if(!empty($services['title'])){?>
        <div class="section-title-area">
            <div class="section-title">
                <span class="wow fadeInUp"><?php echo $services['breadcrumb_title']; ?></span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    <?php echo $services['title']; ?>
                </h2>
            </div>
            <p class="text-white wow fadeInUp" data-wow-delay=".5s">
                <?php echo $services['description']; ?>
            </p>
        </div>
        <?php }?>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'services',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'ASC',
                'posts_per_page' => 3 // this will retrive all the post that is published 
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                $count = 1; ?>
                <?php while ($result->have_posts()) : $result->the_post();
                $delay = 0.3 + ($count - 1) * 0.2;?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <div class="service-box-items style-3">
                            <?php $icon = get_field('icon', get_the_ID());
                            if (!empty($icon)) { ?>
                                <div class="icon">
                                    <?php echo $icon; ?>
                                </div>
                            <?php } ?>
                            <div class="content">
                                <h3>
                                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                </h3>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink();?>" class="link-btn">
                                    Read More <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $count++;endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!-- Portfolio Section Start -->
<section class="portfolio-section-2 section-padding pt-0">
    <div class="container">
        <?php $gallery = get_field('gallery');
        if(!empty($gallery['title'])){?>
        <div class="section-title text-center">
            <span class="wow fadeInUp"><?php echo $gallery['breadcrumb_title']; ?></span>
            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo $gallery['title']; ?></h2>
        </div>
        <?php }?>
        <div class="swiper portfolio-slider-2">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'projects',
                    'orderby'    => 'ID',
                    'post_status' => 'publish',
                    'order'    => 'DESC',
                    'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                $result = new WP_Query($args);
                if ($result->have_posts()) : ?>
                    <?php while ($result->have_posts()) : $result->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="portfolio-single-items">
                                <div class="portfolio-image bg-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                    <div class="portfolio-content">
                                        <h3>
                                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                        </h3>
                                        <?php if (get_the_excerpt()) { ?>
                                            <p><?php the_excerpt(); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="team-section fix section-padding pt-0" id="team">
    <div class="container">
        <?php $team_members = get_field('team_menbers');
        if(!empty($team_members['title'])){?>
        <div class="section-title text-center">
            <span class="wow fadeInUp"><?php echo $team_members['breadcrumb_title']; ?></span>
            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo $team_members['title']; ?></h2>
        </div>
        <?php }?>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'team-members',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => 3 // this will retrive all the post that is published 
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                $count = 1; ?>
                <?php while ($result->have_posts()) : $result->the_post();
                    $delay = 0.3 + ($count - 1) * 0.2; ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <div class="team-box-items <?php echo $count == 2 ? 'active' : ''; ?>">
                            <div class="team-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="team-img">
                            </div>
                            <?php
                            $terms = get_terms(array(
                                'taxonomy'   => 'designation',
                                'hide_empty' => false,
                            ));

                            if (!empty($terms) && !is_wp_error($terms)) { ?>
                                <div class="team-content">
                                    <?php
                                    foreach ($terms as $term) {
                                        echo '<p>' . $term->name . '</p>';
                                    } ?>
                                    <h3>
                                    <?php }
                                    ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                        </div>
                    </div>
                <?php $count++;
                endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section-5 fix">
    <div class="frame-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/frame.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="testimonial-wrapper-2">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6">
                    <div class="testimonial-image bg-cover" style="background-image: url('<?php echo get_field('upload_image')['url'];?>');"></div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="swiper testimonial-slider-2">
                        <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'testimonials',
                                'orderby'    => 'ID',
                                'post_status' => 'publish',
                                'order'    => 'DESC',
                                'posts_per_page' => -1 // this will retrive all the post that is published 
                            );
                            $result = new WP_Query($args);
                            if ($result->have_posts()) : ?>
                                <?php while ($result->have_posts()) : $result->the_post(); ?>
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <div class="client-info">
                                                <h3><?php the_title(); ?></h3>
                                                <?php
                                                $terms = get_terms(array(
                                                    'taxonomy'   => 'profession',
                                                    'hide_empty' => false,
                                                ));

                                                if (!empty($terms) && !is_wp_error($terms)) {
                                                    foreach ($terms as $term) {
                                                        echo '<span>' . $term->name . '</span>';
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <p>
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <div class="social-icon">
                                                <a href="#"><i class="fab fa-facebook-f me-4"></i></a>
                                                <a href="#"><i class="fab fa-twitter me-4"></i></a>
                                                <a href="#"><i class="fab fa-vimeo-v me-4"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </div>
                        <div class="array-button">
                            <button class="array-prev"><i class="fal fa-arrow-left text-white"></i></button>
                            <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section Start -->
<section class="news-section section-padding fix" id="blog">
    <div class="container">
        <?php $blogs = get_field('blogs');
        if (!empty($blogs['title'])) { ?>
            <div class="section-title-area title-responsive">
                <div class="section-title">
                    <span class="wow fadeInUp"><?php echo $blogs['breadcrumb_title']; ?></span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo $blogs['title']; ?></h2>
                </div>
                <p class="text-white wow fadeInUp" data-wow-delay=".5s">
                    <?php echo $blogs['short_description']; ?>
                </p>
            </div>
        <?php } ?>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'blogs',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => 3
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                $count = 1; ?>
                <?php while ($result->have_posts()) : $result->the_post();
                    $delay = 0.3 + ($count - 1) * 0.2; ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <div class="news-box-items">
                            <div class="news-image bg-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="news-details.html"><?php the_title(); ?></a>
                                </h3>
                                <a href="<?php the_permalink(); ?>" class="link-btn white-btn">
                                    Load More <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $count++;
                endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>