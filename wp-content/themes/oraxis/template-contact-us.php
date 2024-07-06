<?php
//Template Name: Contact Us
get_header(); ?>
<!-- Contact Info Section Start -->
<section class="contact-Info-section section-padding pb-80 fix">
    <div class="container">
        <div class="contact-info-wrapper">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-6">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-info-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Contact Info</h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Cloud computing is a model for delivering on-demand computing resources over the internet. It can benefit your </p>
                        <div class="contact-info-area">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Phone</h3>
                                            <h6><a href="tel:0123456789101" class="me-3">012 345 678 9101</a><a href="tel:2085550112">(208) 555-0112</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Email</h3>
                                            <h6><a href="mailto:info@example.com" class="link">info@example.com</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Location</h3>
                                            <h6>4517 Washington Ave. Manchester, Kentucky 39495</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-link"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Website</h3>
                                            <h6>www.example.com</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-section-4 fix section-padding pt-80">
    <div class="container">
        <div class="contact-wrapper-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">Contact Us</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Get In Touch</h2>
                        </div>
                        <?php /*
                        <form action="contact.php" id="contact-form" method="POST" class="contact-form-items mt-4 mt-md-0">
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="number" id="number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="form-clt">
                                        <input type="text" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Message here.."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-7 wow fadeInUp">
                                    <button type="submit" class="theme-btn padding-style">
                                        submit now <i class="fas fa-long-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        */?>
                        <?php echo do_shortcode('[contact-form-7 id="651bdbf" title="Contact Us" html_class="contact-form-items mt-4 mt-md-0" ]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>