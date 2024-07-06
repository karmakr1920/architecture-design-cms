<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

	<!-- Error Section Start -->
	<div class="error-section fix section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="error-items text-center">
                            <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/error.png" alt="img">
                            </div>
                            <a href="<?php echo site_url();?>" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                                <span>Back To Home<i class="fas fa-chevron-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
