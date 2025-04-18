<?php
/**
 * Template for displaying category archives
 * @package ECS
 */
get_header(); ?>
    <main>
        <section class="category-hero" data-aos="fade-up">
            <div class="hero-content">
                <h1><?php single_cat_title(); ?></h1>
                <?php if ($description = category_description()) : ?>
                    <p><?php echo wp_kses_post($description); ?></p>
                <?php endif; ?>
            </div>
        </section>
        <section class="category-posts" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="posts-grid">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                    <?php endwhile; ?>
                        <div class="pagination">
                            <?php
                            the_posts_pagination([
                                'prev_text' => __('« Prev'),
                                'next_text' => __('Next »'),
                            ]);
                            ?>
                        </div>
                    <?php else : ?>
                        <p><?php esc_html_e('No posts found in this category.', 'ecs'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>