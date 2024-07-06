<?php get_header(); ?>
<section class="service-details-section fix section-padding">
    <div class="container">
        <div class="project-details-wrapper">
            <div class="row g-4">
                <div class="col-12 col-lg-4 order-2 order-md-1">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget">
                            <div class="project-catagory">
                                <h3>Architecture Plus</h3>
                                <p>There are many variations passages a This category focariations of deign</p>
                                <ul>
                                    <li>
                                        Client
                                        <span>Interior Design</span>
                                    </li>
                                    <li>
                                        Year
                                        <span>December,2024</span>
                                    </li>
                                    <li>
                                        Author
                                        <span>Shikhon Islam</span>
                                    </li>
                                </ul>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 order-1 order-md-2">
                    <div class="project-details-items">
                        <div class="project-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/details-1.jpg" alt="img">
                        </div>
                        <?php if (get_the_content()) { ?>
                            <?php the_content(); ?>
                        <?php } else { ?>
                            <div class="pro-details-items">
                                <h1 style="text-align: center;color:red;">Coming Soon</h1>
                            </div>
                        <?php } ?>
                        <?php /*
                                <div class="pro-details-items">
                                    <div class="row g-0">
                                        <div class="col-xxl-6">
                                            <div class="thumb">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/img/project/details-2.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6">
                                            <div class="pro-details-content-items">
                                                <div class="pro-details-cont">
                                                    <h3>The Architect's Touch</h3>
                                                <p>
                                                    There are many variations passages a  category focariations of deign Redefining the  concept of living This category focuses
                                                </p>
                                                </div>
                                                <div class="pro-details-cont">
                                                    <h3>Concept of living</h3>
                                                    <p>
                                                        There are many variations passages a  category focariations of deign Redefining the  concept of living This category focuses
                                                    </p>
                                                    <p class="mt-3">
                                                        There are many variations passages a  category focariations of deign Redefining the  concept of living This category focuses
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                */ ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>