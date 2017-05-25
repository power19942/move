<?php get_header() ?>
    <div class="owl-carousel">
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
            <div class="caption">
                Movie info
            </div>
        </div>


    </div>
    <!--content-->
    <div class="container main-container">

        <h3 class="center section-name">نتائج البحث</h3>
        <nav id="search-navbar">
            <?php get_search_form() ?>
        </nav>
        <div class="row">
            <?php
            $args = ['post_type'=>'movie'];
            $search_query = new WP_Query($args);
            if($search_query->have_posts()) :

                while ($search_query->have_posts()) : $search_query->the_post();
                    ?>

                    <div class="col s6 m3">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo get_template_directory_uri()?>/images/logan.jpg">
                                <span class="card-title"><?php the_title() ?></span>
                                <a href="<?php the_permalink() ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                            </div>
                            <div class="card-content">
                                <p><?php  echo wp_trim_words(get_the_excerpt(),55,'...') ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>

<?php get_footer() ?>