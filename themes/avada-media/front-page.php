<?php get_header(); ?>
    <div class="container pr">
        <div class="popup__cart">
            <div class="wrap">
                <div class="popup__cart_item">
                    <div class="row align-items-center no-gutters item_row">
                        <div class="col-md-5 col-12">
                            <div class="item_title">
                                <p>Орех соленый 80г.</p>
                            </div>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="row align-items-center no-gutters">
                                <div class="col-6">
                                    <div class="item_quantity">
                                        <button type="button" class="quantity_minus">
                                            <i class="nut-icon icons-qty-left"></i>
                                        </button>
                                        <input type="text" name="quantity" value="4" class="quantity_input">
                                        <button type="button" class="quantity_plus">
                                            <i class="nut-icon icons-qty-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="item_sum">
                                        <p>100 <span>грн.</span></p>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="item_close">
                                        <a href="#">
                                            <i class="nut-icon icons-close-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup__cart_item">
                    <div class="row align-items-center no-gutters item_row">
                        <div class="col-md-5 col-12">
                            <div class="item_title">
                                <p>Орех сладкий 80г.</p>
                            </div>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="row align-items-center no-gutters">
                                <div class="col-6">
                                    <div class="item_quantity">
                                        <button type="button" class="quantity_minus">
                                            <i class="nut-icon icons-qty-left"></i>
                                        </button>
                                        <input type="text" name="quantity" value="8" class="quantity_input">
                                        <button type="button" class="quantity_plus">
                                            <i class="nut-icon icons-qty-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="item_sum">
                                        <p>80 <span>грн.</span></p>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="item_close">
                                        <a href="#">
                                            <i class="nut-icon icons-close-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup__cart_sum">
                    <div class="sum_item">
                        <div class="sum_item_title">
                            <p>Всего </p>
                        </div>
                        <div class="sum_item_new">
                            <p>175 <i>грн.</i></p>
                        </div>
                    </div>
                    <div class="sum_item">
                        <div class="sum_item_button">
                            <a href="#" class="button">Перейти в корзину</a>
                        </div>
                    </div>
                </div>
                <!-- Если корзина пуста -->
                <!-- <div class="popup__cart_clean">
                    <p>Ваша корзина пуста</p>
                </div> -->
            </div>
        </div>
    </div>

<?php $main_block = get_field('main_block'); ?>
<?php if ($main_block): ?>
    <section class="first-section overlay"
             style="background-image: url(<?= ($main_block['cover']) ? $main_block['cover'] : '' ?>)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <a href="#">
                    <h1><?= ($main_block['title']) ? $main_block['title'] : '' ?></h1>
                    <p><?= ($main_block['description']) ? $main_block['description'] : '' ?></p>
                    <span><i class="nut-icon icons-play-icon"></i></span>
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php $product_block = get_field('product_block'); ?>
<?php if ($product_block): ?>
    <section class="production">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <h2><?= ($product_block['title']) ? $product_block['title'] : '' ?></h2>
                    <p><?= ($product_block['description']) ? $product_block['description'] : '' ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1
                );
                $all_posts = new WP_Query($args);
                while ($all_posts->have_posts()) :
                    $all_posts->the_post(); ?>

                    <?php $main_info_block = get_field('main_info_block'); ?>
                    <?php if ($main_info_block): ?>
                    <div class="col-lg-4 col-md-6	col-12">
                        <div class="wrap">
                            <div class="production__item">
                                <?php if (!empty($main_info_block['sticker'])): ?>
                                    <div class="sticker">
                                        <i class="nut-icon <?= $main_info_block['sticker']['value'] ?>"></i>
                                        <p><?= $main_info_block['sticker']['label'] ?></p>
                                    </div>
                                <?php endif; ?>
                                <!-- Slider main container -->
                                <div class="products-container swiper-container">
                                    <!-- Additional required wrapper -->
                                    <?php $image_block = get_field('image_block'); ?>
                                    <?php if ($image_block): ?>
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            <?php if ($image_block['carousel']): ?>
                                                <?php foreach ($image_block['carousel'] as $item): ?>
                                                    <div class="swiper-slide">
                                                        <a href="<?php the_permalink(); ?>"><img
                                                                    src="<?= $item['image'] ?>" alt="alt"/></a>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <img class="zoom" src="<?= esc_url(get_theme_file_uri('/img/zoom.svg')) ?>"
                                         alt="alt">
                                </div>
                                <div class="wrap">
                                    <div class="production__item_title">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="production__item_art">
                                        <span>Арт:</span> <?= ($main_info_block['art']) ? $main_info_block['art'] : '' ?>
                                    </div>
                                    <div class="production__item_descr">
                                        <?= ($main_info_block['title']) ? $main_info_block['title'] : '' ?>
                                    </div>
                                    <div class="production__item_weight">
                                        <div class="weight_item">
                                            <div class="weight_item_icon">
                                                <i class="nut-icon icons-food-scale-tool"></i>
                                            </div>
                                            <div class="weight_item_descr">
                                                <p>Масса</p>
                                                <p>
                                                    <span><?= ($main_info_block['weight']) ? $main_info_block['weight'] : '' ?><i>г.</i></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="weight_item">
                                            <div class="weight_item_icon">
                                                <i class="nut-icon icons-group"></i>
                                            </div>
                                            <div class="weight_item_descr">
                                                <p>Упаковка</p>
                                                <p>
                                                    <span><?= ($main_info_block['packaging']) ? $main_info_block['packaging'] : '' ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="production__item_sum">
                                        <div class="sum_item">
                                            <div class="sum_item_title">
                                                <p>Цена: </p>
                                            </div>
                                            <div class="sum_item_new">
                                                <p><?= ($main_info_block['price']) ? $main_info_block['price'] : '' ?>
                                                    <i>грн.</i></p>
                                            </div>
                                            <?php if ($main_info_block['old_price'])  : ?>
                                                <div class="sum_item_old">
                                                    <p><?= $main_info_block['old_price'] ?> <i>грн.</i></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="sum_item">
                                            <div class="sum_item_button">
                                                <a href="#" class="button">Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endwhile;
                wp_reset_postdata(); //Очищаем кастомный запрос?>
            </div>
            <?php if ($product_block['button'])  : ?>
                <div class="row">
                    <div class="wrapper">
                        <a href="<?= ($product_block['button']['link']) ? $product_block['button']['link'] : '' ?>"
                           class="button button_transparent"><?= ($product_block['button']['title']) ? $product_block['button']['title'] : '' ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<?php $about_block = get_field('about_block'); ?>
<?php if ($about_block): ?>
    <section class="manufacturer gray_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h2><?= ($about_block['title']) ? $about_block['title'] : '' ?></h2>
                    <?= ($about_block['description']) ? $about_block['description'] : '' ?>
                    <?php if ($about_block['button'])  : ?>
                        <a href="<?= ($about_block['button']['link']) ? $about_block['button']['link'] : '' ?>"
                           class="button button_transparent"><?= ($about_block['button']['title']) ? $about_block['button']['title'] : '' ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-md-7">
                    <!-- Swiper -->
                    <?php if ($about_block['carousel']): ?>
                        <div class="manufacturer-container swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($about_block['carousel'] as $item): ?>
                                    <div class="swiper-slide">
                                        <div class="manufacturer__item manufacturer__item_video">
                                            <img src="<?= $item['image'] ?>" alt="alt">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="wrap">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php $timer_block = get_field('timer_block'); ?>
<?php if ($timer_block): ?>
    <section class="timer">
        <div class="container">
            <div class="row">
                <?php if (!empty($timer_block['timer'])): ?>
                    <?php foreach ($timer_block['timer'] as $item): ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="wrap">
                        <span class="timer__single" data-from="1" data-to="<?= $item['value'] ?>"
                              data-speed="<?= $item['speed'] ?>"
                              data-refresh-interval="50"></span>
                                <sup><?= $item['units'] ?></sup>
                                <div class="timer__descr">
                                    <?= $item['title'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php $goal_block = get_field('goal_block'); ?>
<?php if ($goal_block): ?>
    <div class="parallax" data-scrollax-parent="true">
        <section class="goal overlay cover"
                 style="background-image: url(<?= ($goal_block['cover']) ? $goal_block['cover'] : '' ?>)"
                 data-scrollax="properties: { translateY: '30%' }">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <a href="#" data-scrollax="properties: { 'translateY': '5%', 'opacity': 1 }">
                        <h2><?= ($goal_block['title']) ? $goal_block['title'] : '' ?></h2>
                        <span><i class="nut-icon icons-play-icon"></i></span>
                        <p><i><?= ($goal_block['description']) ? $goal_block['description'] : '' ?></i></p>
                    </a>
                </div>
            </div>
        </section>
    </div>
<?php endif; ?>

<?php $benefit_block = get_field('benefit_block'); ?>
<?php if ($benefit_block): ?>
    <section class="benefit">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <h2><?= ($benefit_block['title']) ? $benefit_block['title'] : '' ?></h2>
                    <p><?= ($benefit_block['description']) ? $benefit_block['description'] : '' ?></p>
                </div>
            </div>
            <?php if (!empty($benefit_block['benefit'])): ?>
                <div class="row justify-content-center">
                    <?php foreach ($benefit_block['benefit'] as $item): ?>
                        <div class="col-lg-4 col-md-6	col-12">
                            <div class="wrap">
                                <div class="benefit__item overlay" style="background-image: url(<?= $item['cover'] ?>)">
                                    <i class="nut-icon <?= $item['icon'] ?>"></i>
                                    <h3><?= $item['title'] ?></h3>
                                </div>
                                <div class="benefit__item item_hover overlay_green">
                                    <i class="nut-icon <?= $item['icon'] ?>"></i>
                                    <h3><?= $item['title'] ?></h3>
                                    <?= $item['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<?php $eco_block = get_field('eco_block'); ?>
<?php if ($eco_block): ?>
    <div class="parallax" data-scrollax-parent="true">
        <section class="eco overlay"
                 style="background-image: url(<?= ($eco_block['cover']) ? $eco_block['cover'] : '' ?>)"
                 data-scrollax="properties: { translateY: '30%' }">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <a href="#" data-scrollax="properties: { 'translateY': '5%', 'opacity': 1 }">
                        <i class="nut-icon icons-eco"></i>
                        <h2><?= ($eco_block['title']) ? $eco_block['title'] : '' ?></h2>
                        <p><?= ($eco_block['description']) ? $eco_block['description'] : '' ?></p>
                    </a>
                </div>
            </div>
        </section>
    </div>
<?php endif; ?>

<?php $news_block = get_field('news_block'); ?>
<?php if ($news_block): ?>
    <section class="news gray_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <h2><?= ($news_block['title']) ? $news_block['title'] : '' ?></h2>
                    <p class="news__descr"><?= ($news_block['description']) ? $news_block['description'] : '' ?></p>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-end">
                    <div class="wrap">
                        <div class="navigation"></div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="news-container swiper-container">
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1
                            );
                            $all_posts = new WP_Query($args);
                            while ($all_posts->have_posts()) :
                                $all_posts->the_post(); ?>

                                <div class="swiper-slide">
                                    <?php
                                    $is_video = false;
                                    foreach (get_the_category() as $category) {
                                        if ($category->slug == 'video') {
                                            $is_video = true;
                                            break;
                                        }
                                    } ?>
                                    <div class="news__item <?= ($is_video) ? 'news__item_video' : ''; ?>">
									<span class="video_wrap">

                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="alt">
                                        <?php endif; ?>
									</span>
                                        <div class="wraper">
                                            <div class="item_data">
                                                <?php the_date() ?>
                                            </div>
                                            <h3><?php the_title() ?></h3>
                                            <p><?= (has_excerpt()) ? get_the_excerpt() : wp_trim_words(get_the_content(), 18); ?>
                                                ...</p>
                                            <a href="<?php the_permalink(); ?>">Читать <i
                                                        class="nut-icon icons-read-more"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); //Очищаем кастомный запрос?>

                        </div>
                    </div>
                </div>
            </div>
            <?php if ($news_block['button'])  : ?>
                <div class="row">
                    <div class="wrapper">
                        <a href="<?= ($news_block['button']['link']) ? $news_block['button']['link'] : '' ?>"
                           class="button button_transparent"><?= ($news_block['button']['title']) ? $news_block['button']['title'] : '' ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>