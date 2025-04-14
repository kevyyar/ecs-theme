<?php
/**
 * Footer template for ECS theme
 *
 * @package ECS
 */
?>

<footer class="site-footer">
    <div class="footer-container">
        <!-- Footer Widgets -->
        <div class="footer-widgets">
            <?php if (have_rows('footer_columns', 'option')) : ?>
                <div class="footer-columns">
                    <?php while (have_rows('footer_columns', 'option')) : the_row(); ?>
                        <div class="footer-column">
                            <?php if ($title = get_sub_field('column_title')) : ?>
                                <h3><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>
                            <?php if ($content = get_sub_field('column_content')) : ?>
                                <div class="column-content">
                                    <?php echo wp_kses_post(ecs_process_footer_content($content)); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('show_social_links') && have_rows('social_links', 'option')) : ?>
                                <ul class="social-links">
                                    <?php while (have_rows('social_links', 'option')) : the_row(); ?>
                                        <?php 
                                        $icon = get_sub_field('social_icon');
                                        $url = get_sub_field('social_url');
                                        $name = get_sub_field('social_name');
                                        ?>
                                        <?php if ($url && $name) : ?>
                                            <li>
                                                <a href="<?php echo esc_url($url); ?>" 
                                                   title="<?php echo esc_attr($name); ?>" 
                                                   target="_blank" 
                                                   rel="noopener noreferrer">
                                                    <?php if ($icon) : ?>
                                                        <i class="<?php echo esc_attr($icon); ?>"></i>
                                                    <?php else : ?>
                                                        <?php echo esc_html($name); ?>
                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p><?php esc_html_e('No footer content configured.', 'ecs'); ?></p>
            <?php endif; ?>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>
                © <?php echo esc_html(date('Y')); ?> 
                <?php echo esc_html(get_field('company_name', 'option') ?: 'Element Cleaning Systems'); ?>. 
                <?php esc_html_e('All rights reserved.', 'ecs'); ?>
            </p>
            <?php if ($privacy_link = get_field('privacy_policy_link', 'option')) : ?>
                <a href="<?php echo esc_url($privacy_link); ?>" class="privacy-link">
                    <?php esc_html_e('Privacy Policy', 'ecs'); ?>
                </a>
            <?php endif; ?>
            <?php if ($terms_link = get_field('terms_conditions_link', 'option')) : ?>
                <a href="<?php echo esc_url($terms_link); ?>" class="terms-link">
                    <?php esc_html_e('Terms & Conditions', 'ecs'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>