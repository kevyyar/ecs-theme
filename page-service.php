<?php
/**
 * Template Name: Service
 * @package ECS
 */
get_header(); ?>
    <main>
        <!-- Hero Section -->
        <?php
        $service_hero_bg = get_field('service_hero_background_image');
        $service_hero_bg_url = $service_hero_bg && is_array($service_hero_bg) && !empty($service_hero_bg['url'])
            ? esc_url($service_hero_bg['url'])
            : get_template_directory_uri() . '/assets/images/fallback-service-hero.jpg';
        ?>
        <section class="service-hero" style="background-image: url('<?php echo $service_hero_bg_url; ?>');" data-aos="fade-up">
            <div class="hero-content">
                <h1><?php echo esc_html(get_field('service_hero_title') ?: get_the_title()); ?></h1>
                <p><?php echo esc_html(get_field('service_hero_description')); ?></p>
            </div>
        </section>

        <!-- Service Content Section -->
        <section class="service-content-section" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="service-content">
                    <?php
                    // Display the main content (WYSIWYG editor)
                    the_content();
                    ?>
                </div>
                <?php if ($features = get_field('service_features')) : ?>
                    <div class="service-features">
                        <h2><?php echo esc_html(get_field('service_features_title') ?: 'Why Choose This Service'); ?></h2>
                        <ul class="features-list">
                            <?php foreach ($features as $feature) : ?>
                                <li><?php echo esc_html($feature['feature_text']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="service-cta" data-aos="fade-up">
            <div class="container">
                <h2><?php echo esc_html(get_field('service_cta_title') ?: 'Ready to Get Started?'); ?></h2>
                <p><?php echo esc_html(get_field('service_cta_description')); ?></p>
                <?php
                $cta_text = get_field('service_cta_button_text') ?: 'Request a Quote';
                $cta_link = get_field('service_cta_button_link') ?: get_permalink(get_page_by_path('contact'));
                ?>
                <a href="<?php echo esc_url($cta_link); ?>" class="cta-button"><?php echo esc_html($cta_text); ?></a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>