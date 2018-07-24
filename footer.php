<footer>
    <div class="ft-main">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer') ?>
                
                <div class="col-md-3">
                    <div class="ft-item">
                        <h3 class="ft-title">Thư viện ảnh</h3>
                        <div class="ft-content">
                            <ul class="ft-gallery">
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="http://via.placeholder.com/50x50" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ft-btm">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="ft-copyright">
                        <p>Thiết kế và phát triển bởi <a href="#" target="_blank">BICTweb.vn</a></p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="ft-menu">
                        <?php echo wp_nav_menu( array( "theme_location" => "footer-menu", "container" => false ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- start inc/components -->
<?php get_template_part('inc/components/quick_view_ajax') ?>
<!-- end inc/components -->
<?php wp_footer() ?>
</body>
</html>