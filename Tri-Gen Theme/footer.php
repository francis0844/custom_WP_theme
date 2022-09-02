<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

	<div class="wrapper" id="wrapper-footer">

		<div class="<?php echo esc_attr( $container ); ?>">

			<?php
				$footer_title = get_field('footer_title', 'option');
				$footer_content = get_field('footer_content', 'option');

				$email_title = get_field('email_title', 'option');
				$email_address = get_field('email_address', 'option');

				$contact_title = get_field('contact_title', 'option');
				$contact_number = get_field('contact_number', 'option');
			?>

			<div class="footer-row grid">
				<div class="column-1">
					<h4><?php echo $footer_title; ?></h4>
					<p class="footer-content"><?php echo $footer_content; ?></p>
					<hr>
					<p><?php echo $email_title; ?></p>
					<a class="footer-email" href="mailto:<?php echo $email_address; ?>"><img src="/wp-content/uploads/2022/07/envelope-1.png" alt=""><?php echo $email_address; ?></a>
					<hr>
					<p><?php echo $contact_title; ?></p>
					<a class="footer-contact" href="tel:<?php echo $contact_number; ?>"><img src="/wp-content/uploads/2022/07/Vector-14.png" alt=""><?php echo $contact_number; ?></a>
					<hr class="lasthr">
					<div class="follow-us">
						<p>Follow Us</p>
						<div class="footer-social grid">
							<?php
								if( have_rows('social_links', 'option') ):
									while( have_rows('social_links', 'option') ) : the_row();
										$icon = get_sub_field('icon', 'option');
										$link = get_sub_field('link', 'option');
										$link_url = $link['url'];
    									$link_title = $link['title'];

										//content
										?>
											<a href="<?php echo $link_url; ?>"><img src="<?php echo esc_url($icon['url']); ?>" alt=""></a>
										<?php
									endwhile;
								else :
								endif;
							?>
						</div>
					</div>
				</div>
				<!-- <div class="column-2" style="display: none;">
					<h4>Quick Links</h4>
					<?php
						/* wp_nav_menu( array( 
							'theme_location' => 'footer-col-1', 
							'container_class' => 'custom-menu-class' )
						);
						*/
					?>
				</div> -->
				<div class="column-3">
					<h4>Services</h4>
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'footer-col-2', 
							'container_class' => 'custom-menu-class' )
						);
					?>
				</div>
				<div class="column-4">
					<h4>Products</h4>
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'footer-col-3', 
							'container_class' => 'custom-menu-class' )
						);
					?>
				</div>
				<div class="column-5">
					<h4 style="visibility: hidden;">.</h4>
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'footer-col-4', 
							'container_class' => 'custom-menu-class' )
						);
					?>
				</div>
			</div>
			<div class="footer-credits-row grid grid-col-3">
				<div class="column-1">
					<div class="follow-us">
						<p>Follow Us</p>
						<div class="footer-social grid">
							<?php
								if( have_rows('social_links', 'option') ):
									while( have_rows('social_links', 'option') ) : the_row();
										$icon = get_sub_field('icon', 'option');
										$link = get_sub_field('link', 'option');
										$link_url = $link['url'];
    									$link_title = $link['title'];

										//content
										?>
											<a href="<?php echo $link_url; ?>"><img src="<?php echo esc_url($icon['url']); ?>" alt=""></a>
										<?php
									endwhile;
								else :
								endif;
							?>
						</div>
					</div>
				</div>
				<div class="column-2">
					<p>© 2022 Tri-gen. All rights reserved.</p>
				</div>
				<div class="column-3">
					<p>Website Design by <span>Jiffi Web Help</span></p>
				</div>
			</div>

		</div><!-- container end -->

	</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

