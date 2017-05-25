<?php
get_header();
$movie_background = get_post_meta($post->ID,'_background',true); // get_template_directory_uri()."/images/silnce.jpg";
?>

    <header class="movie-header" style="background: url(<?php echo $movie_background ?>) no-repeat center top; background-size: cover;">
        <nav id="navbar">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="<?php bloginfo('home') ?>" class="my-logo">MovieApp</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="">Sass</a></li>
                        <li><a href="">Components</a></li>
                        <li><a href="">JavaScript</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="movie-footer">
            <h3><?php echo wp_get_post_terms($post->ID,'movie_categories')[0]->name  ?> : التصنيف</h3>
            |
            <h3><?php the_title() ?> : الاسم  </h3>
        </div>
    </header>

    <div class="container mt50">
        <div class="row">
            <div class="col m2 s12 download">
                <h3>مشاهدة</h3>
                <ul>
                    <a class="fancybox-media" href="https://www.youtube.com/watch?v=rq-Du9GYP4I"><li>Drive</li></a>
                    <a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo get_the_post_thumbnail_url() ?>" ><li>Drive</li></a>
                    <a class="fancybox iframe" href="http://www.google.com/" ><li>Drive</li></a>
                </ul>
                <h3>تحميل</h3>
                <ul>
                    <a href=""><li>Drive</li></a>
                    <a href=""><li>Drive</li></a>
                    <a href=""><li>Drive</li></a>
                </ul>
            </div>
            <div class="col m6 s12 info">
                <h3>القصة: </h3>
                <p><?php echo get_post($post->ID)->post_content ?></p>
                <div class="movie-info">
                    <ul>
                        <li>
                            <i class="fa fa-3x fa-calendar"></i>
                            <br>
                            <p>عام العرض</p>
                            <p><?php echo get_post_meta( $post->ID, '_year', true ) ?></p>
                            <small>.</small>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-clock-o"></i>
                            <br>
                            <p>مدة العرض</p>
                            <p><?php echo get_post_meta( $post->ID, '_duration', true ) ?></p>
                            <small>دقيقة</small>
                        </li>
                        <li>
                            <i class="fa fa-3x fa-imdb"></i>
                            <br>
                            <p>التقييم</p>
                            <p><?php echo get_post_meta( $post->ID, '_imdb_rate', true ) ?></p>
                            <small>من 10</small>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col m4 s12 cover">
                <div class="image-wrapper">
                    <label class="category"><?php echo wp_get_post_terms($post->ID,'movie_categories')[0]->name  ?></label>
                    <?php the_post_thumbnail(['253','253']);?>
                </div>
            </div>
        </div>
    </div>
    <div class="trailer">
        <div class="container">
            <div class="row">

                <h3>اعلان الفيلم : </h3>
                <div class="col s12 center">
                    <iframe  src="<?php echo get_post_meta( $post->ID, '_trailer', true ) ?>"></iframe>
                </div>
                <h3> الفيلم : </h3>
                <div class="col s12 center">
                    <iframe  src="<?php echo get_post_meta( $post->ID, '_watch_drive', true ) ?>"></iframe>
                </div>

            </div>
        </div>
    </div>
    <div class="comments">
        <div class="container">
            <?php
//            if ( comments_open() ):
//                comments_template();
//            endif;
            ?>
        </div>
    </div>

<?php
get_footer();
?>