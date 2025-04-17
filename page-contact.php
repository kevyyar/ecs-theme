<?php
/**
 * Template Name: Contact Page
 * @package ECS
 */
get_header(); ?>
    <main>
        <!-- Hero Section -->
        <?php
        $contact_hero_bg = get_field('contact_hero_background_image');
        $contact_hero_bg_url = $contact_hero_bg && is_array($contact_hero_bg) && !empty($contact_hero_bg['url'])
            ? esc_url($contact_hero_bg['url'])
            : get_template_directory_uri() . '/assets/images/fallback-contact-hero.jpg';
        ?>
        <section class="contact-hero" style="background-image: url('<?php echo $contact_hero_bg_url; ?>');" data-aos="fade-up">
            <div class="hero-content">
                <h1><?php echo esc_html(get_field('contact_hero_title') ?: 'Contact Us'); ?></h1>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="contact-form-section" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-content">
                        <h2><?php echo esc_html(get_field('contact_form_title') ?: 'You’re Making the Right Choice'); ?></h2>
                        <div class="contact-text"><?php echo wp_kses_post(get_field('contact_form_text')); ?></div>
                        <h3 id="expectations-heading">What to Expect Next:</h3>
                        <ul class="contact-expectations" aria-labelledby="expectations-heading">
                            <?php if (have_rows('contact_expectations')) : ?>
                                <?php while (have_rows('contact_expectations')) : the_row(); ?>
                                    <li><?php echo esc_html(get_sub_field('expectation')); ?></li>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <li>Analysis: Are we the right fit? We’ll review your needs, budget, and timeline to ensure a perfect match.</li>
                                <li>Solutions: We’ll identify your cleaning challenges and propose sustainable, effective solutions.</li>
                                <li>Decision: Once we align on the plan, it’s a simple yes or no to get started with a spotless space.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="contact-form">
                        <h3 id="form-heading">Request a Quote</h3>
                        <div role="form" aria-labelledby="form-heading">
                            <?php
                            $form_shortcode = get_field('contact_form_shortcode');
                            if ($form_shortcode) {
                                echo do_shortcode($form_shortcode);
                            } else {
                                echo do_shortcode('[contact-form-7 id="bd244cb" title="Request a Quote Form"]');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>