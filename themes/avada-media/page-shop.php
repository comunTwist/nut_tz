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
            <div class="breadcrumbs">
                <?php  the_breadcrumb(); ?>
            </div>
            <div class="row align-items-center justify-content-center">
                <h1><?= ($main_block['title']) ? $main_block['title'] : '' ?></h1>
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
                    <div class="production__filter">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="production__filter_title">
                                            <p>Фильтр</p>
                                            <i class="nut-icon icons-settings"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <select>
                                            <option value="hide">Вкус</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <select>
                                            <option value="hide">Масса</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                            <option value="lorem">lorem</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 align-self-center">
                                <div class="row">
                                    <div class="col-lg-5 align-self-center">
                                        <div class="production__filter_price">
											<span>
													Стоимость
											</span>
                                            <i class="nut-icon icons-arrow-down"></i>
                                            <i class="nut-icon icons-right-top accent"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="production__filter_button">
                                            <a href="#" class="button">Применить</a>
                                            <a href="#" class="button_close"><i class="nut-icon icons-close-button"></i><span> Сбросить</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

<?php $manufacturer_block = get_field('manufacturer_block'); ?>
<?php if ($manufacturer_block): ?>
    <section class="manufacturer gray_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h2><?= ($manufacturer_block['title']) ? $manufacturer_block['title'] : '' ?></h2>
                    <div class="wrapper">
                        <?= ($manufacturer_block['description']) ? $manufacturer_block['description'] : '' ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Swiper -->
                    <?php if ($manufacturer_block['carousel']): ?>
                        <div class="manufacturer-container swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($manufacturer_block['carousel'] as $item): ?>
                                    <div class="swiper-slide">
                                        <div class="manufacturer__item">
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
<?php get_footer(); ?>