<?php get_header(); ?>
<!-- Service Details Section Start -->
<section class="service-details-section fix section-padding">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-5">
                <div class="col-12 col-lg-8">
                    <div class="service-details-items">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="service-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
                            </div>
                        <?php } ?>
                        <?php if(get_the_content()){?>
                        <div class="details-content">
                            <?php the_content(); ?>
                        </div>
                        <?php }else{?>
                            <div class="details-content">
                            <h1 style="text-align: center;color:red;">Coming Soon</h1>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php
                $current_post_id = get_the_ID(); // Get the current post ID

                $args = array(
                    'post_type'      => 'services',
                    'orderby'        => 'ID',
                    'post_status'    => 'publish',
                    'order'          => 'DESC',
                    'posts_per_page' => 7,
                    'post__not_in'   => array($current_post_id), // Exclude the current post
                );
                $result = new WP_Query($args);
                if ($result->have_posts()) : ?>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="widget-categories">
                                    <ul>
                                        <?php while ($result->have_posts()) : $result->the_post(); ?>
                                            <li><i class="fas fa-chevron-circle-right me-3"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>