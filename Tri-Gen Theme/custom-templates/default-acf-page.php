<?php
/**
 * Template Name: Default ACF Page
 *
 * This template has width, margin and padding containers removed for use with page builder plugins.
 *
 * @package Understrap
 */

get_header();

    echo '<div class="wrapper">';
        $background = get_field('background');
        ?>
            <div id="page_header_wrapper">
                <div id="page_header" class="page_header" style="background: url(<?php echo esc_url($background['url']); ?>) no-repeat center;">
                    <div class="page-header-container container">
                        <div class="page-header-row">
                            <h1><?php echo get_the_title(); ?></h1>
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

        //ACF Blocks
        include 'acf-blocks.php';

    echo '</div>';
    
get_footer();