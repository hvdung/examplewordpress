<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head() ?>
</head>
<body>
<header class="absolute">
    <?php global $bict; ?>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="info">
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>Hotline: <?php echo $bict['header-hotline'] ?>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>Email: <?php echo $bict['header-email'] ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="social">
                        <li>
                            <a href="<?php echo $bict['facebook'] ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $bict['twitter'] ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $bict['gg'] ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $bict['youtube'] ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-7 col-xs-7">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $bict['logo']['url'] ?>" ></a>
                    </div>
                </div>
                <div class="col-md-9 hidden-xs hidden-sm">
                    <div class="bict-menu">
                        <?php echo wp_nav_menu( array( "theme_location" => "main-menu", "container" => false ) ); ?>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-5 hidden-md hidden-lg">
                    <div class="btn-menu">
                        <a id="btn-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>