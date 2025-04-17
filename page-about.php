<?php
/**
 * Template Name: About Page
 * @package ECS
 */
get_header(); ?>
<main>
    <!-- Hero Section -->
    <?php
    $about_hero_bg = get_field('about_hero_background_image');
    $about_hero_bg_url = $about_hero_bg && is_array($about_hero_bg) && !empty($about_hero_bg['url']) 
        ? esc_url($about_hero_bg['url']) 
        : get_template_directory_uri() . '/assets/images/fallback-about-hero.jpg';
    ?>
    <section class="about-hero" style="background-image: url('<?php echo $about_hero_bg_url; ?>');">
        <div class="hero-content">
            <h1><?php echo esc_html(get_field('about_hero_title') ?: 'Who We Are'); ?></h1>
            <p><?php echo esc_html(get_field('about_hero_description')); ?></p>
        </div>
    </section>

    <!-- Values Section -->
    <section class="about-values" data-aos="fade-up">
        <div class="container">
            <h2><?php echo esc_html(get_field('values_title') ?: 'What We Stand For'); ?></h2>
            <?php if (have_rows('values')) : ?>
                <div class="values-grid">
                    <?php while (have_rows('values')) : the_row(); ?>
                        <div class="value-item">
                            <span class="value-icon"><?php echo get_sub_field('value_icon') ?: '✔'; ?></span>
                            <h3><?php echo esc_html(get_sub_field('value_title')); ?></h3>
                            <p><?php echo esc_html(get_sub_field('value_description')); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p>No values added yet.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- History Section -->
    <section class="about-history" data-aos="fade-up">
        <div class="container">
            <h2><?php echo esc_html(get_field('history_title') ?: 'Where We’ve Been and Where We’re Going'); ?></h2>
            <h3>Our History</h3>
            <p><?php echo esc_html(get_field('history_description')); ?></p>
        </div>
    </section>

    <!-- Team Section (Carousel) -->
    <section class="about-team" data-aos="fade-up">
        <div class="container">
            <h2><?php echo esc_html(get_field('team_title') ?: 'Our Corporate Staff'); ?></h2>
            <?php if (have_rows('team_members')) : ?>
                <div class="team-carousel" role="region" aria-label="Team Members Carousel">
                    <?php while (have_rows('team_members')) : the_row(); ?>
                        <div class="team-member">
                            <?php
                            $member_image = get_sub_field('member_image');
                            $member_image_url = $member_image && is_array($member_image) && !empty($member_image['url']) 
                                ? esc_url($member_image['url']) 
                                : get_template_directory_uri() . '/assets/images/fallback-member.jpg';
                            $member_image_alt = $member_image ? esc_attr($member_image['alt']) : esc_attr(get_sub_field('member_name'));
                            ?>
                            <img src="<?php echo $member_image_url; ?>" alt="<?php echo $member_image_alt; ?>" class="member-image" loading="lazy">
                            <h3><?php echo esc_html(get_sub_field('member_name')); ?></h3>
                            <p class="member-role"><?php echo esc_html(get_sub_field('member_role')); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p>No team members added yet.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Location Section -->
    <section class="about-location">
        <div class="container">
            <h2><?php echo esc_html(get_field('location_title') ?: 'Seattle, the Place We Call Home'); ?></h2>
            <p><?php echo esc_html(get_field('location_description')); ?></p>
        </div>
    </section>
</main>
<?php get_footer(); ?>