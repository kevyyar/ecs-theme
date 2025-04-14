<?php get_header(); ?>
<main>
    <?php
    $hero_bg_image = get_field('hero_background_image');
    $bg_image_url = '';
    if ($hero_bg_image && is_array($hero_bg_image) && !empty($hero_bg_image)) {
        $bg_image_url = esc_url($hero_bg_image['url']);
    }
    ?>
    <section class="hero" style="background-image: linear-gradient(180deg, hsla(118, 40%, 47%, 0.40) 0%, hsla(0, 7%, 29%, 0.40) 100%), url('<?php echo esc_url($bg_image_url); ?>');">
        <div class="hero-content">
            <h1><?php echo esc_html(get_field('hero_title')); ?></h1>
            <p><?php echo esc_html(get_field('hero_subtitle')); ?></p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="cta">
                <?php echo esc_html(get_field('cta_text')); ?>
            </a>
        </div>
    </section>
    <!-- Companies That Trust Us Section -->
    <section class="companies-trust-us">
        <div class="container">
            <h2>Companies That Trust Us</h2>
            <?php if (have_rows('companies_that_trust_us')): ?>
                <div class="companies-grid" data-aos="fade-up">
                    <?php while (have_rows('companies_that_trust_us')): the_row(); ?>
                        <?php if ($logo = get_sub_field('company_logo')): ?>
                            <div class="company-logo">
                                <img src="<?php echo esc_url($logo['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr(get_sub_field('company_name') ?: 'Company Logo'); ?>" title="<?php echo esc_attr(get_sub_field('company_name')); ?>">
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>No companies added yet.</p>
            <?php endif; ?>
        </div>
    </section>
    <section class="services" data-aos="fade-up">
        <h2>Our Services</h2>
        <?php if (have_rows('services')) : ?>
            <div class="service-list">
                <?php while (have_rows('services')) : the_row(); ?>
                    <div class="service">
                        <?php
                        $service_image = get_sub_field('service_image');
                        $image_url = $service_image ? esc_url($service_image['url']) : '';
                        $image_alt = $service_image ? esc_attr($service_image['alt']) : esc_attr(get_sub_field('service_title'));
                        ?>
                        <?php if ($image_url) : ?>
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="service-image">
                        <?php endif; ?>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_sub_field('service_title')); ?></h3>
                            <p><?php echo esc_html(get_sub_field('service_description')); ?></p>
                            <?php if ($link = get_sub_field('service_link')) : ?>
                                <a href="<?php echo esc_url($link); ?>" class="service-link">Learn More</a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>No services found.</p>
        <?php endif; ?>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" data-aos="fade-up">
        <div class="container">
            <h2>Testimonials</h2>
            <?php if (have_rows('testimonials')): ?>
                <div class="testimonials-grid">
                    <?php while (have_rows('testimonials')): the_row(); ?>
                        <div class="testimonial-card">
                            <?php if ($image = get_sub_field('customer_image')): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="testimonial-image">
                            <?php else: ?>
                                <i class="fas fa-user-circle testimonial-placeholder"></i>
                            <?php endif; ?>
                            <blockquote>
                                <p><?php echo esc_html(get_sub_field('testimonial_text')); ?></p>
                            </blockquote>
                            <div class="testimonial-meta">
                                <p class="customer-name"><?php echo esc_html(get_sub_field('customer_name')); ?></p>
                                <?php if ($rating = get_sub_field('rating')): ?>
                                    <div class="rating">
                                        <?php
                                        // Since return format is "Both (Array)", $rating is an array
                                        // Access the 'value' key (e.g., "4 stars")
                                        $rating_value = is_array($rating) ? $rating['value'] : $rating;
                                        // Extract the number from the value (e.g., "4 stars" -> 4)
                                        $stars = intval(str_replace(' stars', '', $rating_value));
                                        // Loop to display stars (1 to 5)
                                        for ($i = 1; $i <= 5; $i++):
                                            if ($i <= $stars): ?>
                                                <i class="fas fa-star"></i>
                                            <?php else: ?>
                                                <i class="far fa-star"></i>
                                        <?php endif;
                                        endfor; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>No testimonials available.</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>