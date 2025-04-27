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
        the_content();
        ?>
      </div>
      <?php if ($features = get_field('service_features')) : ?>
        <div class="service-features">
          <h2><?php echo esc_html(get_field('service_features_title') ?: 'Why Choose This Service'); ?></h2>
          <ul class="features-list">
            <?php foreach ($features as $feature) : ?>
              <li>
                <span class="feature-icon">✔</span>
                <span><?php echo esc_html($feature['feature_text']); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php
  $before_image = get_field('service_before_image');
  $after_image = get_field('service_after_image');
  $comparison_title = get_field('service_before_after_title');

  // Only display the section if BOTH images are set
  if ($before_image && $after_image) :
    $before_image_url = is_array($before_image) ? $before_image['url'] : wp_get_attachment_image_url($before_image, 'large');
    $after_image_url = is_array($after_image) ? $after_image['url'] : wp_get_attachment_image_url($after_image, 'large');

    $before_alt = '';
    if (is_array($before_image) && !empty($before_image['alt'])) {
      $before_alt = esc_attr($before_image['alt']);
    } elseif (is_numeric($before_image)) { // else if it's an attachment ID
      $before_alt = esc_attr(get_post_meta($before_image, '_wp_attachment_image_alt', true));
    }
    // Fallback alt text
    if (empty($before_alt)) {
      $before_alt = 'Before cleaning - ' . esc_attr(get_the_title());
    }

    $after_alt = '';
    if (is_array($after_image) && !empty($after_image['alt'])) {
      $after_alt = esc_attr($after_image['alt']);
    } elseif (is_numeric($after_image)) { // else if it's an attachment ID 
      $after_alt = esc_attr(get_post_meta($after_image, '_wp_attachment_image_alt', true));
    }
    // Fallback alt text
    if (empty($after_alt)) {
      $after_alt = 'After cleaning - ' . esc_attr(get_the_title());
    }

  ?>
    <section class="service-comparison" data-aos="fade-up">
      <div class="container">
        <?php if ($comparison_title) : ?>
          <h2 class="comparison-title"><?php echo esc_html($comparison_title); ?></h2>
        <?php endif; ?>

        <div class="twentytwenty-container">
          <img src="<?php echo esc_url($before_image_url); ?>" alt="<?php echo $before_alt; ?>" />
          <img src="<?php echo esc_url($after_image_url); ?>" alt="<?php echo $after_alt; ?>" />
        </div>
      </div>
    </section>
  <?php endif;
  ?>

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