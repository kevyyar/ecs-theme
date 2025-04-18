<?php
/**
 * Template for displaying single posts
 * @package ECS
 */
get_header(); ?>
  <main>
      <?php while (have_posts()) : the_post(); ?>
        <section class="post-hero" data-aos="fade-up">
          <div class="hero-content">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
              <span class="post-date"><?php echo get_the_date(); ?></span>
              <span class="post-author">by <?php the_author(); ?></span>
            </div>
              <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                  <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
                       alt="<?php echo esc_attr(get_the_title()); ?>"
                       loading="lazy">
                </div>
              <?php endif; ?>
          </div>
        </section>
        <section class="post-content-section" data-aos="fade-up" data-aos-delay="100">
          <div class="container">
            <article class="post-content">
                <?php the_content(); ?>
            </article>
              <?php if (has_tag()) : ?>
                <div class="post-tags">
                    <?php the_tags('<span class="tag-label">Tags:</span> ', ', '); ?>
                </div>
              <?php endif; ?>
              <?php if (has_category()) : ?>
                <div class="post-categories">
                    <?php the_category(', '); ?>
                </div>
              <?php endif; ?>
          </div>
        </section>
          <?php
          $categories = get_the_category();
          $category_ids = wp_list_pluck($categories, 'term_id');
          $related_args = [
              'post_type'      => 'post',
              'posts_per_page' => 3,
              'post__not_in'   => [get_the_ID()],
              'category__in'   => $category_ids,
              'orderby'        => 'rand',
              'post_status'    => 'publish',
          ];
          $related_query = new WP_Query($related_args);
          if ($related_query->have_posts()) :
              ?>
            <section class="related-posts" data-aos="fade-up">
              <div class="container">
                <h2><?php esc_html_e('Related Posts', 'ecs'); ?></h2>
                <div class="posts-grid">
                    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
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
                          <div class="post-excerpt">
                              <?php the_excerpt(); ?>
                          </div>
                          <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                      </article>
                    <?php endwhile; ?>
                </div>
              </div>
            </section>
              <?php
              wp_reset_postdata();
          endif;
          ?>
      <?php endwhile; ?>
  </main>
<?php get_footer(); ?>