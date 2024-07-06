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

<section class="portfolio-section fix section-padding">
    <div class="portfolio-wrapper style-2">
        <?php
        // Get the current page number
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type'      => 'projects',
            'orderby'        => 'ID',
            'post_status'    => 'publish',
            'order'          => 'DESC',
            'posts_per_page' => 2, // Adjust the number of posts per page
            'paged'          => $paged, // Add pagination parameter
        );

        $result = new WP_Query($args);
        if ($result->have_posts()) : ?>
            <div class="row g-4">
                <?php while ($result->have_posts()) : $result->the_post(); ?>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        <div class="portfolio-items">
                            <div class="portfolio-image bg-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                                <div class="portfolio-content">
                                    <a href="<?php the_permalink(); ?>" class="icon">
                                        <i class="fas fa-long-arrow-right"></i>
                                    </a>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <?php if (get_the_excerpt()) { ?>
                                        <p><?php the_excerpt(); ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php
            // After the loop ends
            if ($result->max_num_pages > 1) : // Check if there are more than one page
            ?>
                <div class="page-nav-wrap mt-5 text-center">
                    <ul>
                        <?php
                        // Set up pagination arguments
                        $big = 999999999; // need an unlikely integer
                        $pagination_args = array(
                            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format'    => '?paged=%#%',
                            'current'   => max(1, get_query_var('paged')),
                            'total'     => $result->max_num_pages,
                            'prev_text' => '<i class="fal fa-long-arrow-left"></i>',
                            'next_text' => '<i class="fal fa-long-arrow-right"></i>',
                            'type'      => 'list', // Outputs an HTML list
                        );

                        // Generate pagination links
                        echo paginate_links($pagination_args);
                        ?>
                    </ul>
                </div>
            <?php
            endif;
            wp_reset_postdata(); 
            endif;
            ?>
    </div>
</section>

<?php
get_footer();