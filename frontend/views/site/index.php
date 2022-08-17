<?php

/** @var yii\web\View $this */

use common\components\HopeImageHelper;

$this->title = 'My Yii Application';
$this->keywords = 'Sữa';
$this->description = 'Sữa';
$this->image = '/images/logo.png';
?>
<div class="site-index">
    <div class="category-banner">
        <div class="category">
            <div class="category-title">
                <p><i class="fa fa-bars"></i> Danh mục</p>
            </div>
            <div class="category-content">
                <ul class="category-list">
                    <li>
                        <a href=""><span>Mẹ bầu và sau sinh</span> <i class="fa fa-angle-right"></i></a>
                        <ul></ul>
                    </li>
                    <li><span>Sữa và thực phẩm</span> <i class="fa fa-angle-right"></i></li>
                    <li><span>Bỉm tã và vệ sinh</span> <i class="fa fa-angle-right"></i></li>
                    <li><span>Đồ sơ sinh</span> <i class="fa fa-angle-right"></i></li>
                    <li><span>Đồ dùng ăn uống</span> <i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <div class="list-banner">
                <?= HopeImageHelper::createTagImage('/images/banner/banner1.webp') ?>
                <?= HopeImageHelper::createTagImage('/images/banner/banner2.webp') ?>
                <?= HopeImageHelper::createTagImage('/images/banner/banner3.webp') ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('.list-banner').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight : false,
        prevArrow:"<button type='button' class='slick-btn slick-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-btn slick-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    });
</script>