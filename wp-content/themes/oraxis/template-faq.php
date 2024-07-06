<?php
//Template Name: FAQ
get_header(); ?>
<!-- Faq Section Start -->
<?php $faq_content = get_field('faq_content');
if (!empty($faq_content)) { ?>
    <section class="faq-section section-padding section-bg fix">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <span class="wow fadeInUp"><?php echo $faq_content['breadcrumb_title']; ?></span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    <?php echo $faq_content['section_title']; ?>
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                <?php echo $faq_content['short_description']; ?>
                            </p>
                            <?php $faq_box = $faq_content['faq_box'];
                            if (!empty($faq_box)) { ?>
                                <div class="faq-box-area wow fadeInUp" data-wow-delay=".7s">
                                    <div class="box-items">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cushion.png" alt="icon-img">
                                        </div>
                                        <div class="content">
                                            <h3><?php echo $faq_box['projects_count']; ?></h3>
                                            <h4><?php echo $faq_box['projects_count_text']; ?></h4>
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo $faq_box['short_description']; ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="faq-accordion">
                            <?php if (have_rows('faq')) : ?>
                                <div class="accordion" id="accordion">
                                    <?php
                                    $count = 1; // Initialize counter
                                    while (have_rows('faq')) : the_row();
                                        $question = get_sub_field('question');
                                        $answer = get_sub_field('answer');
                                        $delay = 0.3 + ($count - 1) * 0.2; // Calculate delay for wow animation
                                        $collapsed = $count > 1 ? 'collapsed' : ''; // Set first item as expanded
                                        $show = $count == 1 ? 'show' : ''; // Set first item as expanded
                                        $aria_expanded = $count == 1 ? 'true' : 'false';
                                    ?>
                                        <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button <?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $count; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="faq<?php echo $count; ?>">
                                                    <span><?php echo $count; ?>.</span> <?php echo $question; ?>
                                                </button>
                                            </h5>
                                            <div id="faq<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $show; ?>" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <?php echo $answer; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        $count++; // Increment counter
                                    endwhile;
                                    ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>