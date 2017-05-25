<?php
?>
<!DOCTYPE html>
<html lang="en" id="ht">
<head>
    <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Montserrat" rel="stylesheet">
    <?php wp_head(); ?>
    <title><?php bloginfo('name') ; wp_title() ;?></title>
</head>
<body <?php body_class() ?>>
<!--nav bar-->
<?php if(!is_single()) : ?>
<div class="navbar-fixed">
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
</div>
<?php endif; ?>
<!--sidebar-->
<?php if(is_home()) : ?>
<aside>
    <ul>
        <li><a href=""><i class="fa fa-list"></i> الرئيسية </a></li>
        <li><a href=""><i class="fa fa-youtube-play"></i> الافلام </a></li>
        <li><a href=""><i class="fa fa-file-movie-o"></i> المسلسلات </a></li>
    </ul>
</aside>
<?php endif; ?>