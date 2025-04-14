<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <!-- Request a Quote Bar -->
        <div class="request-quote-bar">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('request-a-quote'))); ?>" class="request-quote-link">
                <?php echo esc_html(get_field('request_quote_text', 'option') ?: 'Request a Quote'); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Hamburger Menu Toggle -->
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <!-- Navigation -->
            <nav class="primary-nav">
                <ul class="nav-menu">
                    <?php
                    $menu_items = wp_get_nav_menu_items('Primary Menu');
                    // echo '<pre>';
                    // var_dump($menu_items);
                    // echo '</pre>';
                    if ($menu_items) :
                        foreach ($menu_items as $menu_item) :
                            $is_services = (strtolower($menu_item->title) === 'services');
                    ?>
                            <li class="menu-item <?php echo $is_services ? 'has-mega-menu' : ''; ?>">
                                <?php if ($is_services) : ?>
                                    <label for="services-toggle-<?php echo $menu_item->ID; ?>" class="services-link-label">
                                        <?php echo esc_html($menu_item->title); ?>
                                        <i class="fas fa-chevron-down services-icon"></i>
                                    </label>
                                <?php else : ?>
                                    <a href="<?php echo esc_url($menu_item->url); ?>">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ($is_services) : ?>
                                    <input type="checkbox" id="services-toggle-<?php echo $menu_item->ID; ?>" class="mega-menu-toggle">
                                    <label for="services-toggle-<?php echo $menu_item->ID; ?>" class="mega-menu-toggle-label">
                                        <span class="toggle-icon"></span>
                                    </label>
                                    <div class="mega-menu">
                                        <?php if (have_rows('services', get_option('page_on_front'))) : ?>
                                            <?php while (have_rows('services', get_option('page_on_front'))) : the_row(); ?>
                                                <?php
                                                $service_title = get_sub_field('service_title');
                                                $service_link = get_sub_field('service_link');
                                                if ($service_title && $service_link) :
                                                ?>
                                                    <a href="<?php echo esc_url($service_link); ?>">
                                                        <?php echo esc_html($service_title); ?>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </nav>

            <!-- Phone Number -->
            <div class="contact-info">
                <a href="tel:<?php echo esc_attr(get_field('phone_number', 'option')); ?>" class="phone-number">
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html(get_field('phone_number', 'option')); ?>
                </a>
                <?php if ($note = get_field('language_note', 'option')) : ?>
                    <span class="language-note">(<?php echo esc_html($note); ?>)</span>
                <?php endif; ?>
            </div>
        </div>
    </header>