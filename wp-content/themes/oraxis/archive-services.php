<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<!-- Service Section Start -->
<section class="service-section fix section-padding">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'services',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'posts_per_page' => 8 // this will retrive all the post that is published 
        );
        $result = new WP_Query($args);
        if ($result->have_posts()) : ?>
            <div class="row g-4">
                <?php while ($result->have_posts()) : $result->the_post(); ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-items style-2">
                        <?php $icon = get_field('icon',get_the_ID());
                        if(!empty($icon)){?>
                            <div class="icon">
                                <?php echo $icon;?>
                            </div>
                            <?php }?>
                            <div class="content">
                                <h3>
                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                </h3>
                                <p>
                                <?php the_excerpt();?>
                                </p>
                                <a href="<?php the_permalink();?>" class="link-btn">
                                    Read More <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php /*
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-items style-2">
                    <div class="icon">
                        <i class="flaticon-floor-plan-1"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Urban Oasis</a>
                        </h3>
                        <p>
                            This category focuses on the design and man
                        </p>
                        <a href="service-details.html" class="link-btn">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-items style-2">
                    <div class="icon">
                        <i class="flaticon-balcony"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Blueprint Builders</a>
                        </h3>
                        <p>
                            This category focuses on the design and man
                        </p>
                        <a href="service-details.html" class="link-btn">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                <div class="service-items style-2">
                    <div class="icon">
                        <i class="flaticon-room"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Room Layout</a>
                        </h3>
                        <p>
                            This category focuses on the design and man
                        </p>
                        <a href="service-details.html" class="link-btn">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-items style-2">
                    <div class="icon">
                        <i class="flaticon-skyline"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Textile Design</a>
                        </h3>
                        <p>
                            This category focuses on the design and man
                        </p>
                        <a href="service-details.html" class="link-btn">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-items style-2">
                    <div class="icon">
                        <i class="flaticon-plan"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Lighting Fixtures</a>
                        </h3>
                        <p>
                            This category focuses on the design and man
                        </p>
                        <a href="service-details.html" class="link-btn">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-items style-2">
                    <div class="icon">
                        <i class="flaticon-floor-plan"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Wallpaper Install</a>
                        </h3>
                        <p>
                            This category focuses on the design and man
                        </p>
                        <a href="service-details.html" class="link-btn">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                <div class="service-items style-2">
                    <div class="icon">
                        <i class="flaticon-patio"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Custom Shelving</a>
                        </h3>
                        <p>
                            This category focuses on the design and man
                        </p>
                        <a href="service-details.html" class="link-btn">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            */ ?>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>
<?php /*
<!-- Contact Section Start -->
<section class="contact-section fix section-bg section-padding">
    <div class="container">
        <div class="contact-wrapper-2">
            <div class="section-title">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Leave a Comment</h2>
            </div>
            <form action="#" id="contact-form" method="POST" class="contact-form-items mt-4 mt-md-0">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="form-clt">
                            <input type="text" name="name" id="name" placeholder="Name">
                            <div class="icon"><i class="far fa-user"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="form-clt">
                            <input type="text" name="email" id="email" placeholder="Email Address">
                            <div class="icon"><i class="far fa-envelope"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="form-clt">
                            <input type="text" name="number" id="number" placeholder="Phone Number">
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="form-clt">
                            <div class="nice-select" tabindex="0">
                                <span class="current">
                                    Choose Services
                                </span>
                                <ul class="list">
                                    <li data-value="1" class="option selected focus">
                                        Default sorting
                                    </li>
                                    <li data-value="1" class="option">
                                        Sort by popularity
                                    </li>
                                    <li data-value="1" class="option">
                                        Sort by average rating
                                    </li>
                                    <li data-value="1" class="option">
                                        Sort by latest
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                        <div class="form-clt">
                            <textarea name="message" id="message" placeholder="Message here.."></textarea>
                            <div class="icon"><i class="fas fa-paper-plane"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                        <button type="submit" class="theme-btn padding-style">
                            Appointment Now <i class="fas fa-long-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
*/?>

<?php
get_footer();
