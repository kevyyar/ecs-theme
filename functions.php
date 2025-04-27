<?php

function ecs_theme_setup()
{
    add_theme_support('title-tag'); // SEO title tag
    add_theme_support('post-thumbnails'); // featured images
    add_theme_support('custom-logo'); // logo in customizer
    add_theme_support('site-icon'); // favicon support

    // register main navigation menu
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'ecs_theme_setup');

// Register Footer Widget Areas
function ecs_widgets_init()
{
    register_sidebar([
        'name'          => 'Footer Column 1',
        'id'            => 'footer_column_1',
        'description'   => 'Add widgets for the first footer column',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => 'Footer Column 2',
        'id'            => 'footer_column_2',
        'description'   => 'Add widgets for the second footer column',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => 'Footer Column 3',
        'id'            => 'footer_column_3',
        'description'   => 'Add widgets for the third footer column',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'ecs_widgets_init');

function ecs_theme_scripts()
{
    // Enqueue Google Fonts
    wp_enqueue_style('ecs-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', array(), null, 'all');

    // Enqueue Font Awesome
    wp_enqueue_style('ecs-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');

    // Enqueue compiled styles
    wp_enqueue_style('ecs-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get('Version'), 'all');

    // Enqueue Slick Slider CSS
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/vendor/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css', array('slick-css'), '1.8.1');

    // Ensure jQuery is loaded (WordPress includes it by default)
    wp_enqueue_script('jquery');

    // Enqueue Slick Slider JS
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', array('jquery'), '1.8.1', true);

    // Enqueue main JS (already existing)
    wp_enqueue_script('ecs-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), wp_get_theme()->get('Version'), true);

    // Enqueue minified parallax JS
    wp_enqueue_script(
        'ecs-parallax',
        get_template_directory_uri() . '/assets/js/dist/parallax.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/dist/parallax.js'),
        true
    );

    // Enqueue AOS (Animate On Scroll) library
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1');
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);
    wp_add_inline_script('aos', 'AOS.init();');

    // Add inline script to initialize Slick Slider for the team carousel
    if (is_page_template('page-about.php')) {
        $slick_init = "
            jQuery(document).ready(function($) {
                $('.team-carousel').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: true,
                    infinite: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        ";
        wp_add_inline_script('slick-js', $slick_init);
    }
}

add_action('wp_enqueue_scripts', 'ecs_theme_scripts');

// Dequeue Contact Form 7 scripts on pages where the form isn't used
function ecs_dequeue_contact_form_7_scripts()
{
    if (!is_page_template('page-contact.php') && !is_front_page()) {
        wp_dequeue_style('contact-form-7');
        wp_dequeue_script('contact-form-7');
    }
}
add_action('wp_enqueue_scripts', 'ecs_dequeue_contact_form_7_scripts', 100);

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'redirect' => false,
    ]);
}

function ecs_load_theme_textdomain()
{
    load_theme_textdomain('ecs', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'ecs_load_theme_textdomain');

/**
 * Procesar el contenido del WYSIWYG para agregar íconos y links a teléfono y email.
 *
 * @param string $content El contenido del WYSIWYG.
 * @return string Contenido procesado.
 */
function ecs_process_footer_content($content)
{
    // Reemplazar [phone]...[/phone] con un link tel: y un ícono
    $content = preg_replace(
        '/\[phone\](.*?)\[\/phone\]/',
        '<div class="contact-phone"><a href="tel:$1"><i class="fas fa-phone"></i> $1</a></div>',
        $content
    );

    // Reemplazar [email]...[/email] con un link mailto: y un ícono
    $content = preg_replace(
        '/\[email\](.*?)\[\/email\]/',
        '<div class="contact-email"><a href="mailto:$1"><i class="fas fa-envelope"></i> $1</a></div>',
        $content
    );

    return $content;
}
