<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
	$cats = get_the_category();
	$cat_name = $cats[0]->name;
?>

<div class="wrapper" id="single-wrapper">

	<div id="page_header_breadcrumbs" class="page_header_breadcrumbs">
        <div class="page-header-breadcrumbs-container container">
            <div class="page-header-breadcrumbs-row">
                <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>   
            </div>
        </div>
    </div>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="post-s-item">
			<div class="meta-container grid">
				<div class="featured-ribbon">
					<p><?php echo $cat_name; ?></p>
				</div>
				<div class="date">
					<p><?php echo get_the_date();?></p>
				</div>
			</div>
			<h3><?php echo get_the_title(); ?></h3>
			<img class="blog-post-image" src="<?php echo $url ?>" alt="">
			<?php echo get_the_content();  ?>
		</div>

		<div class="meta-post-s-item">
			<?php 
				$posttags = get_the_tags();
				if ($posttags) {
					echo '<p>Tags: ';
				  	foreach($posttags as $tag) {
						echo '<span>' . $tag->name . '</span>, ';
				  	}
					echo '</p>';
				}
			?>
		</div>

		<hr>

		<div class="post-s-item-footer grid grid-col-2">
			<div class="column-1">
				<a href="/blog"><img src="/wp-content/uploads/2022/08/Vector-3-1.png" alt="">Return to Blogs</a>
			</div>
			<div class="column-2">
				<p>Share Product: <img src="/wp-content/uploads/2022/08/Path.png" alt=""><img src="/wp-content/uploads/2022/08/Group-57.png" alt=""></p>
			</div>
		</div>

	</div><!-- #content -->

	<div id="related_blogs">
		<div class="related-blogs-row">
			<h2>Related Blogs</h2>
			<div class="all-post posts-default container">
				<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 2
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
								<a href="<?php echo get_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
								<?php 
									$contentWithoutHTML = wp_strip_all_tags($post->post_content);
									$pos = strpos($contentWithoutHTML, " ", 180);
									$contentFinal = substr($contentWithoutHTML,0,$pos ); 
								?>
								<p> <?php echo $contentFinal; ?> </p>
							</div>

						<?php endwhile; ?>
					
						<?php wp_reset_postdata(); ?>
					
					<?php endif;
				?>
			</div>
		</div>
	</div>

</div><!-- #single-wrapper -->

<?php
get_footer();
