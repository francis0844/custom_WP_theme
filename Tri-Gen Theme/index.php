<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">
	
	<?php $background = get_field('background');
        ?>
            <div id="page_header_wrapper">
                <div id="page_header" class="page_header" style="background: url(/wp-content/uploads/2022/08/image-21-copy.png) no-repeat center;">
                    <div class="page-header-container container">
                        <div class="page-header-row">
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
                <div id="page_header_breadcrumbs" class="page_header_breadcrumbs">
                    <div class="page-header-breadcrumbs-container container">
                        <div class="page-header-breadcrumbs-row">
                            <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>   
                        </div>
                    </div>
                </div>
            </div>
        <?php
	?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	
		<div id="post_nav" style="display: none !important">
			<div class="post-nav-cat">
				<a id="nav_all" class="post-nav-s-item post-nav-active">All</a>
				<a id="nav_press" class="post-nav-s-item">Press Release</a>
				<a id="nav_environment" class="post-nav-s-item">Environment</a>
				<a id="nav_sustainability" class="post-nav-s-item">Sustainability</a>
				<a id="nav_other" class="post-nav-s-item">Other</a>
			</div>
		</div>

		<div id="all">
			<div class="all-post posts-default">
				<?php
					$args = array(
						'post_type' => 'post'
					);

					$post_query = new WP_Query($args);

					if ( $post_query->have_posts() ) : ?>
        
						<?php 
							while ( $post_query->have_posts() ) : $post_query->the_post(); 
							$url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
							$cats = get_the_category();
							$cat_name = $cats[0]->name;
						?>

							<div class="blog-featured-slider-s-item">
								<a href="<?php echo get_permalink(); ?>">
									<img class="blog-post-image" src="<?php echo $url ?>" alt="">
								</a>
								<div class="meta-container grid">
									<div class="featured-ribbon">
										<?php
											$categories = get_the_category();
											$cat_link = get_category_link($categories);
										?>
										<a href="<?php echo $cat_link; ?>"><p><?php echo $cat_name; ?></p></a>
									</div>
									<div class="date">
										<p><?php echo get_the_date();?></p>
									</div>
								</div>
								<a href="<?php echo get_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
								<?php 
									$contentWithoutHTML = wp_strip_all_tags($post->post_content);
									$pos = strpos($contentWithoutHTML, " ", 100);
									$contentFinal = substr($contentWithoutHTML,0,$pos ); 
								?>
								<p> <?php echo wp_trim_words( get_the_content(),  40, '...' ); ?> </p>
							</div>

						<?php endwhile; ?>
					
						<?php wp_reset_postdata(); ?>
					
					<?php endif;
				?>
			</div>
		</div>

		<div id="press_release">
			<div class="press-post posts-default">
				<?php
					$args = array(
						'post_type' => 'post',
						'tag' => 'press_release'
					);

					$post_query = new WP_Query($args);

					if ( $post_query->have_posts() ) : ?>
        
						<?php 
							while ( $post_query->have_posts() ) : $post_query->the_post(); 
							$url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
							$cats = get_the_category();
							$cat_name = $cats[0]->name;
						?>

							<div class="blog-featured-slider-s-item">
								<img class="blog-post-image" src="<?php echo $url ?>" alt="">
								<div class="meta-container grid">
									<div class="featured-ribbon">
										<p><?php echo $cat_name; ?></p>
									</div>
									<div class="date">
										<p><?php echo get_the_date();?></p>
									</div>
								</div>
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo get_the_content();  ?></p>
							</div>

						<?php endwhile; ?>
					
						<?php wp_reset_postdata(); ?>
					
					<?php endif;
				?>
			</div>
		</div>

		<div id="environment">
			<div class="environment-post posts-default">
				<?php
					$args = array(
						'post_type' => 'post',
						'tag' => 'environment'
					);

					$post_query = new WP_Query($args);

					if ( $post_query->have_posts() ) : ?>
        
						<?php 
							while ( $post_query->have_posts() ) : $post_query->the_post(); 
							$url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
							$cats = get_the_category();
							$cat_name = $cats[0]->name;
						?>

							<div class="blog-featured-slider-s-item">
								<img class="blog-post-image" src="<?php echo $url ?>" alt="">
								<div class="meta-container grid">
									<div class="featured-ribbon">
										<p><?php echo $cat_name; ?></p>
									</div>
									<div class="date">
										<p><?php echo get_the_date();?></p>
									</div>
								</div>
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo get_the_content();  ?></p>
							</div>

						<?php endwhile; ?>
					
						<?php wp_reset_postdata(); ?>
					
					<?php endif;
				?>
			</div>
		</div>
		
		<div id="sustainability">
			<div class="sustainability-post posts-default">
				<?php
					$args = array(
						'post_type' => 'post',
						'tag' => 'sustainability'
					);

					$post_query = new WP_Query($args);

					if ( $post_query->have_posts() ) : ?>
        
						<?php 
							while ( $post_query->have_posts() ) : $post_query->the_post(); 
							$url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
							$cats = get_the_category();
							$cat_name = $cats[0]->name;
						?>

							<div class="blog-featured-slider-s-item">
								<img class="blog-post-image" src="<?php echo $url ?>" alt="">
								<div class="meta-container grid">
									<div class="featured-ribbon">
										<p><?php echo $cat_name; ?></p>
									</div>
									<div class="date">
										<p><?php echo get_the_date();?></p>
									</div>
								</div>
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo get_the_content();  ?></p>
							</div>

						<?php endwhile; ?>
					
						<?php wp_reset_postdata(); ?>
					
					<?php endif;
				?>
			</div>
		</div>

		<div id="other">
			<div class="other-post posts-default">
				<?php
					$args = array(
						'post_type' => 'post',
						'tag' => 'other'
					);

					$post_query = new WP_Query($args);

					if ( $post_query->have_posts() ) : ?>
        
						<?php 
							while ( $post_query->have_posts() ) : $post_query->the_post(); 
							$url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
							$cats = get_the_category();
							$cat_name = $cats[0]->name;
						?>

							<div class="blog-featured-slider-s-item">
								<img class="blog-post-image" src="<?php echo $url ?>" alt="">
								<div class="meta-container grid">
									<div class="featured-ribbon">
										<p><?php echo $cat_name; ?></p>
									</div>
									<div class="date">
										<p><?php echo get_the_date();?></p>
									</div>
								</div>
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo get_the_content();  ?></p>
							</div>

						<?php endwhile; ?>
					
						<?php wp_reset_postdata(); ?>
					
					<?php endif;
				?>
			</div>
		</div>

		<div id="newsletter">
			<div class="newsletter-row">
				<h3>Subscribe to our Newsletter & Stay Updated</h3>
				<?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
			</div>
		</div>

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
