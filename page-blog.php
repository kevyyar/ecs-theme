<?php
/**
 * Template Name: Blog
 * @package ECS
 */
get_header(); ?>
    <main>
        <!-- Hero Section -->
        <?php
        $blog_hero_bg = get_field('blog_hero_background_image');
        $blog_hero_bg_url = $blog_hero_bg && is_array($blog_hero_bg) && !empty($blog_hero_bg['url'])
            ? esc_url($blog_hero_bg['url'])
            : get_template_directory_uri() . '/assets/images/fallback-blog-hero.jpg';
        ?>
        <section class="blog-hero" style="background-image: url('<?php echo $blog_hero_bg_url; ?>');" data-aos="fade-up">
            <div class="hero-content">
                <h1><?php echo esc_html(get_field('blog_hero_title') ?: 'Our Blog'); ?></h1>
                <p><?php echo esc_html(get_field('blog_hero_description')); ?></p>
            </div>
        </section>

        <!-- Blog Posts Section -->
        <section class="blog-posts" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="posts-grid">
                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = [
                        'post_type'      => 'post',
                        'posts_per_page' => 9, // Adjustable via ACF or settings
                        'paged'          => $paged,
                        'post_status'    => 'publish',
                    ];
                    $blog_query = new WP_Query($args);

                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                            ?>
                            <article class="post-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>"
                                             alt="<?php echo esc_attr(get_the_title()); ?>"
                                             loading="lazy">
                                    </a>
                                <?php endif; ?>
                                <div class="post-content">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="post-meta">
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                        <span class="post-author">by <?php the_author(); ?></span>
                                    </div>
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        ?>
                        <!-- Pagination -->
                        <div class="pagination">
                            <?php
                            echo paginate_links([
                                'total'   => $blog_query->max_num_pages,
                                'current' => max(1, $paged),
                                'prev_text' => __('« Prev'),
                                'next_text' => __('Next »'),
                            ]);
                            ?>
                        </div>
                        <?php
                        wp_reset_postdata();
                    else :
                        ?>
                        <p><?php esc_html_e('No posts found.', 'ecs'); ?></p>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>