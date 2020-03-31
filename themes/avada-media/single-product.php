<?php get_header();
while (have_posts()) :
    the_post();
    ?>
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

    <section class="first-section no-bg">
        <div class="container">
            <div class="breadcrumbs">
                <?php  the_breadcrumb(); ?>
            </div>
        </div>
    </section>
    <?php $main_info_block = get_field('main_info_block'); ?>
    <?php if ($main_info_block): ?>
    <section class="product">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                    <div class="wrap">
                        <div class="product__item">
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
                                                    <a href="<?php the_permalink(); ?>"><img src="<?= $item['image'] ?>"
                                                                                             alt="alt"/></a>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <img class="zoom" src="img/zoom.svg" alt="alt">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product__content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product__content_name">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product__content_art">
                                    Арт:<span> <?= ($main_info_block['art']) ? $main_info_block['art'] : '' ?></span>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h1><?= ($main_info_block['title']) ? $main_info_block['title'] : '' ?></h1>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="col-12">
                                <div class="product__content_descr">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <strong>Состав:</strong>
                                                </div>
                                                <div class="col-md-7">
                                                    <span><?= ($main_info_block['mix']) ? $main_info_block['mix'] : '' ?></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <strong>Масса нетто:</strong>
                                                </div>
                                                <div class="col-md-7">
                                                    <span><?= ($main_info_block['weight']) ? $main_info_block['weight'] : '' ?>г.</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <strong>Энергетическая ценность:</strong>
                                                </div>
                                                <div class="col-md-7">
                                                    <span><?= ($main_info_block['energy_value']) ? $main_info_block['energy_value'] : '' ?> Ккал.</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <strong>Срок годности:</strong>
                                                </div>
                                                <div class="col-md-7">
                                                    <span><?= ($main_info_block['shelf_life']) ? $main_info_block['shelf_life'] : '' ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php if ($main_info_block['warning'])  : ?>
                                <div class="col-12">
                                    <div class="warning">
                                        <i class="nut-icon icons-warning-sigh"></i>
                                        <p><?= $main_info_block['warning'] ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-12">
                                <div class="product__content_sum">
                                    <div class="sum_item">
                                        <div class="sum_item_title">
                                            <p>Ваша цена: </p>
                                        </div>
                                        <div class="sum_item_new">
                                            <p><?= ($main_info_block['price']) ? $main_info_block['price'] : '' ?> <i>грн.</i>
                                            </p>
                                        </div>
                                        <?php if ($main_info_block['old_price'])  : ?>
                                            <div class="sum_item_old">
                                                <p><?= $main_info_block['old_price'] ?> <i>грн.</i></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="sum_item">
                                        <div class="sum_item_button">
                                            <a href="#" class="button">Заказать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <?php $description_block = get_field('description_block'); ?>
    <?php if ($description_block): ?>
    <section class="payment payment__product">
        <?php if (!empty($description_block['tabs'])): ?>
            <div class="tabs">
                <div class="tabs__wrap">
                    <div class="container">
                        <div class="row">
                            <ul class="tabs__caption">
                                <?php $is_active = true;
                                foreach ($description_block['tabs'] as $item): ?>
                                    <li class="<?php if ($is_active) echo 'active';
                                    $is_active = false; ?>"><span><?= $item['title'] ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php $is_active = true;
                            foreach ($description_block['tabs'] as $item): ?>
                                <div class="tabs__content <?php if ($is_active) echo 'active';
                                $is_active = false; ?>">
                                    <div class="row">
                                        <?php if ($item['image']) : ?>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <img src="<?= $item['image'] ?>" class="tabs__content_img" alt="alt">
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-lg-8 col-md-6 col-12 align-self-center">
                                            <div class="tabs__content_product">
                                                <?= $item['description'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
<?php endwhile;
get_footer(); ?>