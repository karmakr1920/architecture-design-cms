<?php
//Template Name: About
get_header();
?>
<!-- About Section Start -->
<section class="about-section fix section-padding">
    <div class="container">
        <div class="about-wrapper mt-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left-items">
                        <div class="dot-shape float-bob-y">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/dot.png" alt="shape-img">
                        </div>
                        <div class="row g-4">
                            <?php $about_counter = get_field('about_counter');
                            if (!empty($about_counter)) { ?>
                                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="about-counter-items">
                                        <h2><span class="count"><?php echo $about_counter['number_of_years']; ?></span>+</h2>
                                        <h5>
                                            <?php echo $about_counter['experience_title']; ?>
                                        </h5>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if (!empty(get_field('about_image_1')['url'])) { ?>
                                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="about-image-1">
                                        <img src="<?php echo get_field('about_image_1')['url']; ?>" alt="<?php echo get_field('about_image_1')['alt']; ?>">
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if (!empty(get_field('profile_name'))) { ?>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="about-image-2 bg-cover" style="background-image: url('<?php echo get_field('about_us_image_2')['url']; ?>');">
                                        <div class="client-items float-bob-y">
                                            <div class="clinet-img bg-cover" style="background-image: url('<?php echo get_field('profile_pic')['url']; ?>');"></div>
                                            <div class="content">
                                                <h4><?php echo get_field('profile_name'); ?></h4>
                                                <p><?php echo get_field('profile_profession'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php $about = get_field('about');
                if (!empty($about['about_us_title'])) { ?>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><?php echo $about['breadcrumb_title']; ?></span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    <?php echo $about['about_us_title']; ?>
                                </h2>
                            </div>
                            <?php echo $about['about_us_description']; ?>
                            <?php /*
                        <div class="about-button wow fadeInUp" data-wow-delay=".9s">
                            <a href="about.html" class="theme-btn">
                                Read More
                                <i class="fas fa-long-arrow-right"></i>
                            </a>
                        </div>
                        */
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- Work Process Section Start -->
<?php $work_process = get_field('work_process');
if (!empty($work_process)) { ?>
    <section class="work-process-section fix section-padding pt-0">
        <div class="container">
            <div class="work-process-wrapper style-2">
                <div class="section-title text-center">
                    <span class="wow fadeInUp"><?php echo $work_process['breadcrumb_title']; ?></span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        <?php echo $work_process['work_process_title']; ?>
                    </h2>
                </div>
                <?php $processes =  $work_process['process'];
                if (!empty($processes)) { ?>
                    <div class="row">
                        <?php foreach ($processes as $key => $process) { ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo "." . (($key + 1) * 2) . "s"; ?>">
                                <div class="work-process-items-2">
                                    <div class="work-process-content">
                                        <h3><?php echo $process['name']; ?></h3>
                                        <h2 class="number"><?php echo "0" . ($key + 1); ?></h2>
                                        <p><?php echo $process['short_description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php /*
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="work-process-items-2">
                        <div class="work-process-content">
                            <h3>Artistic Architecture</h3>
                            <h2 class="number">02</h2>
                            <p>This category focuses on the design construction of buildings and the arrangement</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="work-process-items-2">
                        <div class="work-process-content">
                            <h3>Interior scape Design</h3>
                            <h2 class="number">03</h2>
                            <p>This category focuses on the design construction of buildings and the arrangement</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="work-process-items-2">
                        <div class="work-process-content">
                            <h3>Conceptual Spaces</h3>
                            <h2 class="number">04</h2>
                            <p>This category focuses on the design construction of buildings and the arrangement</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="work-process-items-2">
                        <div class="work-process-content">
                            <h3>Inspire Design Group</h3>
                            <h2 class="number">05</h2>
                            <p>This category focuses on the design construction of buildings and the arrangement</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="work-process-items-2">
                        <div class="work-process-content">
                            <h3>Modern Living Spaces</h3>
                            <h2 class="number">06</h2>
                            <p>This category focuses on the design construction of buildings and the arrangement</p>
                        </div>
                    </div>
                </div>
                */ ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php /*
<!-- Brand Section Start -->
<div class="brand-section section-padding section-bg fix">
    <div class="container">
        <div class="brand-wrapper">
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/01.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/02.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/03.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/04.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/05.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
*/ ?>

<!-- Achievement Section Start -->
<?php $achievement = get_field('achievement');
if (!empty($achievement)) { ?>
    <section class="achievement-section fix section-bg section-padding pt-0">
        <div class="shape-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="achievement-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="achievement-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><?php echo $achievement['breadcrumb_title']; ?></span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    <?php echo $achievement['title']; ?>
                                </h2>
                            </div>
                            <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                <?php echo $achievement['short_description']; ?>
                            </p>
                            <?php /*
                        <div class="about-button wow fadeInUp" data-wow-delay=".7s">
                            <a href="about.html" class="theme-btn bg-transparent">
                                Read More
                                <i class="fas fa-long-arrow-right"></i>
                            </a>
                        </div>
                        */ ?>
                        </div>
                    </div>
                    <?php $achievement_details = $achievement['achievement_details']; ?>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="counter-area">
                            <div class="row g-4">
                                <?php foreach ($achievement_details as $details) { ?>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="counter-item">
                                            <div class="icon">
                                                <i class="flaticon-frame"></i>
                                            </div>
                                            <div class="content">
                                                <h2><span class="count"><?php echo $details['number']; ?></span>+</h2>
                                                <p><?php echo $details['title']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php /*
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="counter-item">
                                    <div class="icon">
                                        <i class="flaticon-window-5"></i>
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">900</span>+</h2>
                                        <p>Team member</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="counter-item">
                                    <div class="icon">
                                        <i class="flaticon-blueprint-2"></i>
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">700</span>+</h2>
                                        <p>Client review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                                <div class="counter-item">
                                    <div class="icon">
                                        <i class="flaticon-layer"></i>
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">80</span>+</h2>
                                        <p>Wining Award</p>
                                    </div>
                                </div>
                            </div>
                            */ ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php get_footer();?>