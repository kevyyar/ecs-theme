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
	<!-- Companies That Trust Us & Why Choose Us combined section -->
	<div style="padding-top: 40px; display: flex; flex-direction: column; justify-content: center;">
		<!-- Companies That Trust Us Section -->
		<section class="companies-trust-us" data-aos="fade-up">
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
		<!-- Why Choose Us Section -->
		<section class="why-choose-us" data-aos="fade-up">
			<div class="container">
				<?php if ($title = get_field('why_choose_us_title')) : ?>
					<h2><?php echo esc_html($title); ?></h2>
				<?php else : ?>
					<h2>Why Seattle Businesses Choose Us for Janitorial Services</h2>
				<?php endif; ?>
				<?php if (have_rows('why_choose_us_benefits')) : ?>
					<ul class="benefits-list">
						<?php while (have_rows('why_choose_us_benefits')) : the_row(); ?>
							<?php
							$icon = get_sub_field('benefit_icon');
							$icon_url = $icon ? esc_url($icon['sizes']['large'] ?? $icon['url']) : '';
							?>
							<li class="benefit-item" style="background-image: url('<?php echo $icon_url; ?>');">
								<span><?php echo esc_html(get_sub_field('benefit_text')); ?></span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php else : ?>
					<p>No benefits added yet.</p>
				<?php endif; ?>
			</div>
		</section>
	</div>
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
	<!-- Local Partner Section -->
	<?php
	$local_partner_bg = get_field('local_partner_bg_image');
	$local_bg_url = '';
	if ($local_partner_bg && is_array($local_partner_bg) && !empty($local_partner_bg)) {
		$local_bg_url = esc_url($local_partner_bg['url']);
	}
	?>
	<section class="local-partner" data-aos="fade-up" style="background-image: url('<?php echo $local_bg_url; ?>');">
		<div class="container">
			<?php if ($title = get_field('local_partner_title')) : ?>
				<h2><?php echo esc_html($title); ?></h2>
			<?php else : ?>
				<h2>Your Local Partner for Exceptional Janitorial Services</h2>
			<?php endif; ?>
			<?php if ($content = get_field('local_partner_content')) : ?>
				<div class="local-partner-content">
					<?php echo wp_kses_post($content); ?>
				</div>
			<?php else : ?>
				<div class="local-partner-content">
					<p>When you choose carpet cleaning from BCS, you get a deeper professional cleaning, faster-drying carpet and a healthier home and office. Does anyone in your home or office suffer from asthma or allergies and you are concerned about air quality and allergens? Do your children love to roll around and play on the carpet and you're worried about bacteria and microorganisms?</p>
				</div>
			<?php endif; ?>
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="consultation-btn">
				Schedule a Consultation
			</a>
		</div>
	</section>

	<!-- Final CTA Section -->
	<section class="final-cta" data-aos="fade-up">
		<div class="container">
			<div class="cta-grid">
				<div class="cta-content">
					<?php if ($headline = get_field('final_cta_headline')) : ?>
						<h2><?php echo esc_html($headline); ?></h2>
					<?php else : ?>
						<h2>Ready for a Spotless Seattle Workspace?</h2>
					<?php endif; ?>

					<?php if ($supporting_text = get_field('final_cta_supporting_text')) : ?>
						<div class="supporting-text"><?php echo esc_html($supporting_text); ?></div>
					<?php else : ?>
						<div class="supporting-text">Experience the Element difference with our professional cleaning services. Let us help you maintain a clean, healthy environment for your business.</div>
					<?php endif; ?>

					<?php
					$cta_text = get_field('final_cta_button_text') ?: 'Get Your Free Quote Today';
					$cta_link = get_field('final_cta_button_link') ?: get_permalink(get_page_by_path('contact'));
					?>
					<a href="<?php echo esc_url($cta_link); ?>" class="cta-button">
						<?php echo esc_html($cta_text); ?>
					</a>

					<div class="contact-info">
						<?php if ($phone = get_field('company_phone', 'option')) : ?>
							<div class="contact-item">
								<i class="fas fa-phone"></i>
								<a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $phone)); ?>">
									<?php echo esc_html($phone); ?>
								</a>
							</div>
						<?php endif; ?>

						<?php if ($email = get_field('company_email', 'option')) : ?>
							<div class="contact-item">
								<i class="fas fa-envelope"></i>
								<a href="mailto:<?php echo esc_attr($email); ?>">
									<?php echo esc_html($email); ?>
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="cta-form">
					<h3>Request a Quote</h3>
					<?php
					$form_shortcode = get_field('final_cta_form_shortcode');
					if ($form_shortcode) {
						echo do_shortcode($form_shortcode);
					} else {
						echo do_shortcode('[contact-form-7 id="bd244cb" title="Request a Quote Form"]');
					}
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>