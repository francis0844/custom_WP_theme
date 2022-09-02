<?php
    if( have_rows('blocks') ):
        while ( have_rows('blocks') ) : the_row();

            // Our Services
            if( get_row_layout() == 'our_services' ): 
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $icon = get_sub_field('icon');
                $image = get_sub_field('image');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="our_services" class="our-services <?php echo $custom_class; ?>">
                        <div class="our-services-container container">
                            <div class="our-services-header grid">
                                <div class="column-1">
                                    <h5><?php echo $subtitle; ?></h5>
                                    <h3><?php echo $title; ?></h3>
                                </div>
                                <div class="column-2">
                                    <div class="vl"></div>
                                </div>
                                <div class="column-3">
                                    <?php if ($icon): ?>
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="our-services-row grid">
                                <div class="column-1">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="">
                                </div>
                                <div class="column-2">
                                    <div class="services-container grid grid-col-2">
                                        <?php
                                            if( have_rows('services') ):
                                                while( have_rows('services') ) : the_row();
                                                    $icon = get_sub_field('icon');
                                                    $service_name = get_sub_field('service_name');
                                                    $service_description = get_sub_field('service_description');

                                                    //content
                                                    ?>
                                                        <div class="services-s-item">
                                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                                            <h6><?php echo $service_name; ?></h6>
                                                            <p><?php echo $service_description; ?></p>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            else :
                                            endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Our Products
            if( get_row_layout() == 'our_products' ): 
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="our_products" class="our_products <?php echo $custom_class; ?>">
                        <div class="our-products-container container">
                            <div class="our-products-header">
                                <h5><?php echo $subtitle; ?></h5>
                                <h3><?php echo $title; ?></h3>
                            </div>
                            <div class="our-products-row">
                                <div class="products-container grid grid-col-4">
                                    <?php
                                        if( have_rows('products') ):
                                            while( have_rows('products') ) : the_row();
                                                $image = get_sub_field('image');
                                                $name = get_sub_field('name');
                                                $description = get_sub_field('description');

                                                $button = get_sub_field('button');
                                                $button_url = $button['url'];
                                                $button_title = $button['title'];

                                                //content
                                                ?>
                                                    <div class="products-s-item">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="">
                                                        <div class="product-content">
                                                            <h6><?php echo $name; ?></h6>
                                                            <p><?php echo $description; ?></p>
                                                            <a href="<?php echo $button_url; ?>" class="def-btn"><?php echo $button_title; ?><img src="/wp-content/uploads/2022/07/Vector-3.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                <?php
                                            endwhile;
                                        else :
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Cotact Section
            if( get_row_layout() == 'contact_section' ): 
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $contact_section_background = get_sub_field('contact_section_background');
                $contact_title = get_sub_field('contact_title');
                $form_shortcode = get_sub_field('form_shortcode');
                $about_us_card_background = get_sub_field('about_us_card_background');
                $about_us_card_title = get_sub_field('about_us_card_title');
                $about_us_card_content = get_sub_field('about_us_card_content');
                $email_icon = get_sub_field('email_icon');
                $email_title = get_sub_field('email_title');
                $email_address = get_sub_field('email_address');
                $contact_icon = get_sub_field('contact_icon');
                $contact_card_title = get_sub_field('contact_card_title');
                $contact_number = get_sub_field('contact_number');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="contact_section" class="contact_section <?php echo $custom_class; ?>" style="background: url(<?php echo esc_url($contact_section_background['url']); ?>) no-repeat center; background-size: cover;">
                        <div class="contact-section-container container">
                            <div class="contact-section-header grid">
                                <div class="column-1">
                                    <h3><?php echo $title; ?></h3>
                                    <div class="content-container">
                                        <?php echo $content; ?>
                                    </div>
                                </div>
                                <div class="column-2">
                                    <div class="statistics-container grid grid-col-3">
                                        <?php
                                            if( have_rows('statistics') ):
                                                while( have_rows('statistics') ) : the_row();
                                                    $icon = get_sub_field('icon');
                                                    $number = get_sub_field('number');
                                                    $statistic_name = get_sub_field('statistic_name');

                                                    //content
                                                    ?>
                                                        <div class="statistics-s-item">
                                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                                            <div class="statistic-content">
                                                                <h3><?php echo $number; ?></h3>
                                                                <p><?php echo $statistic_name; ?></p>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            else :
                                            endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-section-form grid">
                                <div class="column-1">
                                    <h3><?php echo $contact_title; ?></h3>
                                    <?php echo do_shortcode("$form_shortcode") ?>
                                </div>
                                <div class="column-2" style="background: url(<?php echo esc_url($about_us_card_background['url']); ?>) no-repeat center; background-size: cover;">
                                    <div class="about-us-card-container">
                                        <h3><?php echo $about_us_card_title; ?></h3>
                                        <p><?php echo $about_us_card_content; ?></p>
                                    </div>
                                    <div class="contact-card-container grid">
                                        <img src="<?php echo esc_url($contact_icon['url']); ?>" alt="">
                                        <div class="contact-s-item">
                                            <p class="email-card-title"><?php echo $contact_card_title; ?></p>
                                            <p class="contact-number-card"><?php echo $contact_number; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Brands
            if( get_row_layout() == 'brands' ): 
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="brands" class="brands <?php echo $custom_class; ?>">
                        <div class="brands-container container">
                            <div class="brands-logo-row grid">
                                <?php
                                    if( have_rows('brand_logos') ):
                                        while( have_rows('brand_logos') ) : the_row();
                                            $logos = get_sub_field('logos');

                                            //content
                                            ?>
                                                <div class="brand-s-item">
                                                    <img src="<?php echo esc_url($logos['url']); ?>" alt="">
                                                </div>
                                            <?php
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Blog Overview
            if( get_row_layout() == 'blog_overview' ): 
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="blog_overview" class="blog_overview <?php echo $custom_class; ?>">
                        <div class="blog-overview-container container">
                            <div class="blog-overview-header">
                                <h5><?php echo $subtitle; ?></h5>
                                <h3><?php echo $title; ?></h3>
                            </div>
                            <div class="blog-overview-row grid">
                                <div class="column-1">
                                    <?php
                                        $args = array(
                                            'post_type' => 'post',
                                            'category_name' => 'featured'
                                        );
        
                                        $post_query = new WP_Query($args);
        
                                        if ( $post_query->have_posts() ) : ?>
        
                                            <?php 
                                                while ( $post_query->have_posts() ) : $post_query->the_post(); 
                                                $url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
                                            ?>
        
                                                <div class="blog-featured-slider-s-item">
                                                    <img class="blog-post-image" src="<?php echo $url ?>" alt="">
                                                    <div class="meta-container grid">
                                                        <div class="featured-ribbon">
                                                            <p>Featured</p>
                                                        </div>
                                                        <div class="date">
                                                            <p><?php echo get_the_date();?></p>
                                                        </div>
                                                    </div>
                                                    <?php 
                                                        $contentWithoutHTML = wp_strip_all_tags($post->post_content);
                                                        $pos = strpos($contentWithoutHTML, " ", 180);
                                                        $contentFinal = substr($contentWithoutHTML,0,$pos ); 
                                                    ?>
                                                    <h4><?php echo get_the_title(); ?></h4>
                                                    <p><?php echo $contentFinal;  ?></p>
                                                </div>
        
                                            <?php endwhile; ?>
                                        
                                            <?php wp_reset_postdata(); ?>
                                        
                                        <?php endif;
                                    ?>
                                </div>
                                <div class="column-2">
                                    <?php
                                        $args = array(
                                            'post_type' => 'post',
                                            'category_name' => 'uncategorized',
                                            'posts_per_page' => 4
                                            
                                        );
        
                                        $post_query = new WP_Query($args);
        
                                        if ( $post_query->have_posts() ) : ?>
        
                                            <?php 
                                                while ( $post_query->have_posts() ) : $post_query->the_post(); 
                                                $url = wp_get_attachment_url( get_post_thumbnail_id($post_query->ID), 'thumbnail' );
                                            ?>
        
                                                <div class="blog-slider-s-item grid">
                                                    <img class="blog-post-image" src="<?php echo $url ?>" alt="">
                                                    <div class="post-meta-post">
                                                        <div class="date">
                                                            <p><?php echo get_the_date();?></p>
                                                        </div>
                                                        <h4><?php echo get_the_title(); ?></h4>
                                                    </div>
                                                </div>
        
                                            <?php endwhile; ?>
                                        
                                            <?php wp_reset_postdata(); ?>
                                        
                                        <?php endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Cards Section
            if( get_row_layout() == 'cards_section' ): 
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="cards_section" class="cards_section <?php echo $custom_class; ?>">
                        <div class="cards-section-container container">
                            <div class="cards-section-header grid grid-col-2">
                                <div class="column-1">
                                    <h5><?php echo $subtitle; ?></h5>
                                    <h3><?php echo $title; ?></h3>
                                </div>
                                <div class="column-2">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                            <div class="cards-section-row">
                                <div class="cards-container grid grid-col-3">
                                    <?php
                                        if( have_rows('cards') ):
                                            while( have_rows('cards') ) : the_row();
                                                $border_color = get_sub_field('border_color');
                                                $icon = get_sub_field('icon');
                                                $title = get_sub_field('title');
                                                $description = get_sub_field('description');

                                                //content
                                                ?>
                                                    <div class="cards-s-item" style="border-top: 9px solid <?php echo $border_color; ?>">
                                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                                        <h6><?php echo $title; ?></h6>
                                                        <?php echo $description; ?>
                                                    </div>
                                                <?php
                                            endwhile;
                                        else :
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Image Section
            if( get_row_layout() == 'image_section' ): 
                $image = get_sub_field('image');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="image_section" class="image_section <?php echo $custom_class; ?>">
                        <div class="image-section-container container">
                            <div class="image-section-row">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Features Section
            if( get_row_layout() == 'features_section' ): 
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="features_section" class="features_section <?php echo $custom_class; ?>">
                        <div class="features-section-container container">
                            <div class="features-section-container-row grid">
                                <div class="column-1">
                                    <h5><?php echo $subtitle; ?></h5>
                                </div>
                                <div class="column-2">
                                    <h2><?php echo $title; ?></h2>
                                    <div class="features-container grid grid-col-2">
                                        <?php
                                            if( have_rows('features') ):
                                                while( have_rows('features') ) : the_row();
                                                    $icon = get_sub_field('icon');
                                                    $feature_title = get_sub_field('feature_title');
                                                    $description = get_sub_field('description');
                                                    //content
                                                    ?>
                                                        <div class="features-s-item grid">
                                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                                            <div class="features-content">
                                                                <h6><?php echo $feature_title; ?></h6>
                                                                <p><?php echo $description; ?></p>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            else :
                                            endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Our Team
            if( get_row_layout() == 'our_team' ): 
                $image = get_sub_field('image');
                $subtitle = get_sub_field('subtitle');
                $name = get_sub_field('name');
                $description = get_sub_field('description');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="our_team" class="our_team <?php echo $custom_class; ?>">
                        <div class="our-team-container container">
                            <div class="our-team-row grid">
                                <div class="column-1">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="">
                                </div>
                                <div class="column-2">
                                    <div class="member-content">
                                        <h5><?php echo $subtitle; ?></h5>
                                        <h2><?php echo $name; ?></h2>
                                        <?php echo $description; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Single Column Content
            if( get_row_layout() == 'single_column_content' ): 
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="single_column_content" class="single_column_content <?php echo $custom_class; ?>">
                        <div class="single-column-content container container">
                            <div class="single-column-content-row">
                                <h3><?php echo $title; ?></h3>
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Image CTA
            if( get_row_layout() == 'image_cta' ): 
                $main_image = get_sub_field('main_image');
                $cta_image_1 = get_sub_field('cta_image_1');

                $link_1 = get_sub_field('link_1');
                $link_1_url = $link_1['url'];
                $link_1_title = $link_1['title'];

                $cta_image_2 = get_sub_field('cta_image_2');
                
                $link_2 = get_sub_field('link_2');
                $link_2_url = $link_2['url'];
                $link_2_title = $link_2['title'];

                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="image_cta" class="image_cta">
                        <div class="image-cta-container container">
                            <div class="image-cta-row grid">
                                <div class="column-1">
                                    <img src="<?php echo esc_url($main_image['url']); ?>" alt="">
                                </div>
                                <div class="column-2 grid grid-col-2">
                                    <img class="image-cta-1" src="<?php echo esc_url($cta_image_1['url']); ?>" alt="">
                                    <a href="<?php echo $link_1_url; ?>" class="image-cta-btn-1">
                                        <img class="header-btn-icon" src="/wp-content/uploads/2022/07/comment.png" alt="">
                                        <span><?php echo $link_1_title; ?></span>
                                        <img class="header-btn-arrow" src="/wp-content/uploads/2022/07/Vector-2.png" alt="">
                                    </a>
                                    <a href="<?php echo $link_2_url; ?>" class="image-cta-btn-2">
                                        <img class="header-btn-icon" src="/wp-content/uploads/2022/08/phone-call-1.png" alt="">
                                        <span><?php echo $link_2_title; ?></span>
                                        <img class="header-btn-arrow" src="/wp-content/uploads/2022/07/Vector-2.png" alt="">
                                    </a>
                                    <img class="image-cta-2" src="<?php echo esc_url($cta_image_2['url']); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Statistic Detail
            if( get_row_layout() == 'statistic_detail' ): 
                $image = get_sub_field('image');
                $image_2 = get_sub_field('image_2');
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="statistic_detail" class="statistic_detail <?php echo $custom_class; ?>">
                        <div class="statistic-detail-container container">
                            <div class="statistic-detail-row grid">
                                <div class="column-1">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="">
                                </div>
                                <div class="column-2">
                                    <h3><?php echo $title; ?></h3>
                                    <div class="statistic-detail-content">
                                        <?php echo $content; ?>
                                    </div>
                                    <div class="statistics-container-detail grid grid-col-3">
                                        <?php
                                            if( have_rows('statistics') ):
                                                while( have_rows('statistics') ) : the_row();
                                                    $icon = get_sub_field('icon');
                                                    $number = get_sub_field('number');
                                                    $title = get_sub_field('title');

                                                    //content
                                                    ?>
                                                        <div class="statistic-s-item-detail">
                                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                                            <div class="statistic-s-item-content">
                                                                <h3><?php echo $number; ?></h3>
                                                                <p><?php echo $title; ?></p>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            else :
                                            endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="column-3">
                                    <img src="<?php echo esc_url($image_2['url']); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Detailed Features
            if( get_row_layout() == 'detailed_features' ): 
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="detailed_features" class="detailed_features <?php echo $custom_class; ?>">
                        <div class="detailed-features-container container">
                            <div class="detailed-features-row">
                                <div class="detailed-services-container grid grid-col-2">
                                    <?php
                                        if( have_rows('features') ):
                                            while( have_rows('features') ) : the_row();
                                                $icon = get_sub_field('icon');
                                                $name = get_sub_field('name');
                                                $description = get_sub_field('description');

                                                $button = get_sub_field('button');

                                                $image = get_sub_field('image');

                                                //content
                                                ?>
                                                    <div class="detailed-services-s-item">
                                                        <div class="detailed-services-content grid">
                                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                                            <div class="detailed-services-text">
                                                                <h4><?php echo $name; ?></h4>
                                                                <p><?php echo $description; ?></p>

                                                                <?php if( $button ): 
                                                                    $button_url = $button['url'];
                                                                    $button_title = $button['title'];
                                                                ?>
                                                                    <a href="<?php echo $button_url; ?>"><?php echo $button_title; ?> <img src="/wp-content/uploads/2022/08/Vector-3.png" alt=""></a>
                                                                <?php else : ?>
                                                                    <a style="visibility: hidden !important" href="<?php echo $button_url; ?>"><?php echo $button_title; ?> <img src="/wp-content/uploads/2022/08/Vector-3.png" alt=""></a>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="detailed-services-img">
                                                            <img src="<?php echo esc_url($image['url']); ?>" alt="">
                                                        </div>
                                                    </div>
                                                <?php
                                            endwhile;
                                        else :
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // CTA
            if( get_row_layout() == 'cta' ): 
                $title = get_sub_field('title');
                $content = get_sub_field('content');

                $call = get_sub_field('call');
                $call_url = $call['url'];
                $call_title = $call['title'];

                $message = get_sub_field('message');
                $message_url = $message['url'];
                $message_title = $message['title'];

                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="cta" class="cta <?php echo $custom_class; ?>">
                        <div class="cta-container container">
                            <div class="cta-row">
                                <h3><?php echo $title; ?></h3>
                                <p><?php echo $content; ?></p>
                                <div class="cta-btn-container grid grid-col-2">
                                    <a class="cta-btn cta-btn-1" href="<?php echo $call_url; ?>"><img src="/wp-content/uploads/2022/08/phone-call-1-1.png" alt="" class="cta-btn-icon"><?php echo $call_title; ?><img src="/wp-content/uploads/2022/08/Vector-1.png" alt="" class="cta-arrow"></a>
                                    <a class="cta-btn cta-btn-2" href="<?php echo $message_url; ?>"><img src="/wp-content/uploads/2022/08/comment.png" alt="" class="cta-btn-icon"><?php echo $message_title; ?><img src="/wp-content/uploads/2022/08/Vector-1.png" alt="" class="cta-arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

            // Contact Form Section
            if( get_row_layout() == 'contact_form_section' ): 
                $form_title = get_sub_field('form_title');
                $contact_form_shortcode = get_sub_field('contact_form_shortcode');
                $custom_class = get_sub_field('custom_class');

                //content
                ?>
                    <div id="contact_form_section" class="contact_form_section <?php echo $custom_class; ?>">
                        <div class="contact-form-section-container container">
                            <div class="contact-form-section-row grid">
                                <div class="column-1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402589.81583544094!2d144.77295891863528!3d-37.971692895730534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sph!4v1660266892810!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="column-2">
                                    <h3><?php echo $form_title; ?></h3>
                                    <?php echo do_shortcode("$contact_form_shortcode"); ?>
                                </div>
                                <div class="column-3">
                                    <div class="socials-container">
                                        <?php
                                            if( have_rows('socials') ):
                                                while( have_rows('socials') ) : the_row();
                                                    $icon = get_sub_field('icon');
                                                    $name = get_sub_field('name');
                                                    $social_info = get_sub_field('social_info');

                                                    //content
                                                    ?>
                                                        <div class="social-s-item grid">
                                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                                            <div class="socials-content">
                                                                <p><?php echo $name; ?></p>
                                                                <span><?php echo $social_info; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            else :
                                            endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

            endif;

        endwhile;
    else :
    endif;
?>