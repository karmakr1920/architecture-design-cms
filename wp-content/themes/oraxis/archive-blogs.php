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

<!-- News Section Start -->
<section class="news-section section-padding fix">
    <div class="container">
        <div class="row g-4 ajax-posts">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'blogs',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'ASC',
                'posts_per_page' => 3,
                'paged'         => $paged,
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                $count = 1; // Initialize counter 
                while ($result->have_posts()) : $result->the_post();
                    $delay = 0.3 + ($count - 1) * 0.2; ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>">
                        <div class="news-card-items style-2 mt-0">
                            <div class="news-image bg-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        <?php echo get_the_author(); ?>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p>
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <a href="<?php echo get_the_permalink(); ?>" class="link-btn">
                                    Load More <i class="far fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $count++;
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
        <?php
        if ($result->max_num_pages > 1) : // Check if there are more than one page
        ?>
            <div class="page-nav-wrap mt-5 text-center">
                <ul>
                    <?php
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

                    echo paginate_links($pagination_args);
                    ?>
                </ul>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>


<?php
get_footer();
