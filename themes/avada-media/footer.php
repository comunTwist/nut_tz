<footer class="footer__bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <div class="wrap">
                    <?php if (is_active_sidebar('footer_column_1')) : ?>
                        <?php dynamic_sidebar('footer_column_1'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div id="map"></div>
            </div>
        </div>
        <div class="bottom_menu">
            <div class="row align-items-center ">
                <div class="col-lg-2">
                    <?php if (is_active_sidebar('footer_logo')) : ?>
                        <?php dynamic_sidebar('footer_logo'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-10">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'headerMenuLocation',
                        'menu_class' => 'menu_main_ul',
                        'container' => false,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="container">
            <div class="row align-items-center ">
                <?php if (is_active_sidebar('bottom_line_column_1')) : ?>
                    <div class="col-md-4 col-12">
                        <?php dynamic_sidebar('bottom_line_column_1'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('bottom_line_column_2')) : ?>
                <div class="col-md-4 col-12">
                    <?php dynamic_sidebar('bottom_line_column_2'); ?>
                </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('bottom_line_column_3')) : ?>
                <div class="col-md-4 col-12">
                    <?php dynamic_sidebar('bottom_line_column_3'); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVofcK1JyIWtVb3kaEbvHi9WqHCteWpxI&amp;callback=initMap"></script>
</body>
</html>