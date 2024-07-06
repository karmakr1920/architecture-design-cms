<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<!--<< Blog Wrapper Here >>-->
<section class="blog-wrapper news-wrapper section-padding">
            <div class="container">
                <div class="news-area">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="blog-post-details border-wrap mt-0">
                                <div class="single-blog-post post-details mt-0">
                                    <div class="post-content pt-0">
                                        <h2 class="mt-0"><?php the_title();?></h2>
                                        <div class="post-meta mt-3">
                                            <span><i class="fal fa-user"></i><?php echo get_the_author(); ?></span>
                                            <?php /*<span><i class="fal fa-comments"></i>15 Comments</span>*/?>
                                            <span><i class="fal fa-calendar-alt"></i><?php echo get_the_date('F j, Y')?></span>
                                        </div>
                                        <?php if (get_the_content()) { ?>
                            <?php echo get_the_content(); ?>
                        <?php } else { ?>
                            
                                <h1 style="text-align: center;color:red;">Coming Soon</h1>
                           
                        <?php } ?>
                                    </div>
                                </div>
								<?php /*
                                <div class="row tag-share-wrap">
                                    <div class="col-lg-8 col-12">
                                        <h4>Releted Tags</h4>
                                        <div class="tagcloud">                                   
                                            <a href="news-details.html">Delivery</a>
                                            <a href="news-details.html">Interiorscape Design</a>
                                            <a href="news-details.html">Urban Oasis</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                        <h4>Social Share</h4>
                                        <div class="social-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>                                    
                                        </div>
                                    </div>
                                </div>								
                                <!-- comments section wrap start -->
                                <div class="comments-section-wrap">
                                    <div class="comments-heading">
                                        <h3>03 Comments</h3>
                                    </div>
                                    <ul class="comments-item-list">
                                        <li class="single-comment-item">
                                            <div class="author-img">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/author-1.jpg" alt="img">
                                            </div>
                                            <div class="author-info-comment">
                                                <div class="info">
                                                    <h5><a href="#">Rosalina Kelian</a></h5>
                                                    <span>19th May 2024</span>
                                                    <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud  laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-comment-item">
                                            <div class="author-img">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/img/news/author-2.jpg" alt="img">
                                            </div>
                                            <div class="author-info-comment">
                                                <div class="info">
                                                    <h5><a href="#">Arista Williamson</a></h5>
                                                    <span>21th Feb 2024</span>
                                                    <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                            <ul class="replay-comment">
                                                <li class="single-comment-item">
                                                    <div class="author-img">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/news/author-3.jpg" alt="img">
                                                    </div>
                                                    <div class="author-info-comment">
                                                        <div class="info">
                                                            <h5><a href="#">Salman Ahmed</a></h5>
                                                            <span>29th Jan 2021</span>
                                                            <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>								
                                <div class="comment-form-wrap mt-40">
                                    <h3>Post Comment</h3>
                                    <form action="#" class="comment-form">
                                        <div class="single-form-input">
                                            <textarea placeholder="Type your comments...."></textarea>
                                        </div>
                                        <div class="single-form-input">
                                            <input type="text" placeholder="Type your name....">
                                        </div>
                                        <div class="single-form-input">
                                            <input type="email" placeholder="Type your email....">
                                        </div>
                                        <div class="single-form-input">
                                            <input type="text" placeholder="Type your website....">
                                        </div>
                                        <button class="theme-btn center" type="submit">
                                             <span><i class="fal fa-comments"></i>Post Comment</span>
                                        </button>
                                    </form>
                                </div>
								*/?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Search</h3>
                                    </div>
                                    <div class="search_widget">
                                        <form action="#">
                                            <input type="text" placeholder="Keywords here....">
                                            <button type="submit"><i class="fal fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Popular Feeds</h3>
                                    </div>
                                    <div class="popular-posts">
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/news/pp1.jpg');"></div>
                                            <div class="post-content">
                                                <h5><a href="news-details.html">Crafting spaces that reflect your style</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>24th March 2024
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/news/pp2.jpg');"></div>
                                            <div class="post-content">
                                                <h5><a href="news-details.html">Redefining the concept of the most living</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>25th March 2024
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/news/pp3.jpg');"></div>
                                            <div class="post-content">
                                                <h5><a href="news-details.html">Building dreams, one room at a the time</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>26th March 2024
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php /*
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Categories</h3>
                                    </div>
                                    <div class="widget_categories">
                                        <ul>
                                            <li><a href="news.html">Space Craft Studio <span>02</span></a></li>
                                            <li><a href="news.html">Architecture Plus <span>05</span></a></li>
                                            <li><a href="news.html">Dream Home Designs <span>10</span></a></li>
                                            <li><a href="news.html">Urban Oasis <span>03</span></a></li>
                                            <li><a href="news.html">Interior Perfection <span>10</span></a></li>
                                            <li><a href="news.html">Blueprint Builders <span>03</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Never Miss News</h3>
                                    </div>
                                    <div class="social-link">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Popular Tags</h3>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="news-details.html">Interiors</a>     
                                        <a href="news-details.html">The Design</a>
                                        <a href="news-details.html">Blueprint</a>
                                        <a href="news-details.html">Builders</a>
                                        <a href="news-details.html">Modern</a>
                                        <a href="news-details.html">Living</a>
                                        <a href="news-details.html">Spaces</a>
                                    </div>
                                </div>
								*/?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
get_footer();
