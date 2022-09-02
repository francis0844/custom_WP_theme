<?php
/**
 * Template Name: Front Page Template
 *
 * This template has width, margin and padding containers removed for use with page builder plugins.
 *
 * @package Understrap
 */

get_header();

    echo '<div class="wrapper">';
        //Header for front page template
        $background = get_field('background', 'option');
        $title = get_field('title', 'option');
        $content = get_field('content', 'option');

        $button_1 = get_field('button_1', 'option');
        $button_1_url = $button_1['url'];
        $button_1_title = $button_1['title'];

        $button_2 = get_field('button_2', 'option');
        $button_2_url = $button_2['url'];
        $button_2_title = $button_2['title'];

        //content
        ?>
            <div id="header_front" class="header-front" style="background: url(<?php echo esc_url($background['url']); ?>) no-repeat center; background-size: cover;">
                <div class="header-front-container container">
                    <div class="header-front-row">
                        <h1><?php echo $title; ?></h1>
                        <p><?php echo $content; ?></p>
                        <div class="header-front-btn-con grid grid-col-2">
                            <a href="<?php echo $button_1_url; ?>" class="header-front-btn header-front-btn-1">
                                <img class="header-btn-icon" src="/wp-content/uploads/2022/07/Vector-15.png" alt="">
                                <?php echo $button_1_title; ?>
                                <img class="header-btn-arrow" src="/wp-content/uploads/2022/07/Vector-2.png" alt="">
                            </a>
                            <a href="<?php echo $button_2_url; ?>" class="header-front-btn header-front-btn-2">
                                <img class="header-btn-icon" src="/wp-content/uploads/2022/07/comment.png" alt="">
                                <?php echo $button_2_title; ?>
                                <img class="header-btn-arrow" src="/wp-content/uploads/2022/07/Vector-2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php

        //ACF Blocks
        include 'acf-blocks.php';

    echo '</div>';
    
get_footer();