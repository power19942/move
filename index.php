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

    <h3 class="center section-name">احدث الافلام</h3>
    <nav id="search-navbar">
        <?php get_search_form() ?>
    </nav>
    <div class="row">
        <?php
        $args =['post_type'=>'movie'];
        $query = new WP_Query($args);
            if($query->have_posts()) :

                while ($query->have_posts()) : $query->the_post();
        ?>

                    <div class="col s6 m3">
                        <div class="card">
                            <div class="card-image">
                                <?php the_post_thumbnail(['253','253']); ?>
                                <span class="card-title"><?php the_title() ?></span>
                                <a href="<?php the_permalink() ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                            </div>
                            <div class="card-content">
                                <p><?php echo wp_trim_words(get_the_excerpt(),20,'...') ?></p>
                            </div>
                        </div>
                    </div>
        <?php
                endwhile;

                else:?>
                    <h1 class="center">لايوجد اي افلام بعد</h1>
             <?php
            endif;
        ?>

    </div>
</div>

<?php get_footer() ?>