<?php

/** @var yii\web\View $this */

use common\components\HopeHtmlHelper;
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
                    <li class="category-item">
                        <a href="" class="category-item-title"><span>Mẹ bầu và sau sinh</span><i class="fa fa-angle-right"></i></a>
                        <ul class="category-list-child mega-menu-lv-1">
                            <div class="block-center">
                                <li class="item">
                                    <a href="" class="item-title">Thế giới sữa bột</a>
                                    <ul class="mega-menu-lv-2">
                                        <li><a href="">Sữa Meiji</a></li>
                                        <li><a href="">Sữa Glico ICreo</a></li>
                                        <li><a href="">Sữa Morinaga</a></li>
                                    </ul>
                                </li>
                                <li class="item">
                                    <a href="" class="item-title">Thực phẩm dinh dưỡng</a>
                                    <ul class="mega-menu-lv-2">
                                        <li><a href="">Sữa Meiji</a></li>
                                        <li><a href="">Sữa Glico ICreo</a></li>
                                        <li><a href="">Sữa Morinaga</a></li>
                                    </ul>
                                </li>
                                <li class="item">
                                    <a href="" class="item-title">Thực phẩm dinh dưỡng</a>
                                    <ul class="mega-menu-lv-2">
                                        <li><a href="">Sữa Meiji</a></li>
                                        <li><a href="">Sữa Glico ICreo</a></li>
                                        <li><a href="">Sữa Morinaga</a></li>
                                    </ul>
                                </li>
                                <li class="item">
                                    <a href="" class="item-title">Thực phẩm dinh dưỡng</a>
                                    <ul class="mega-menu-lv-2">
                                        <li><a href="">Sữa Meiji</a></li>
                                        <li><a href="">Sữa Glico ICreo</a></li>
                                        <li><a href="">Sữa Morinaga</a></li>
                                    </ul>
                                </li>
                                <li class="item">
                                    <a href="" class="item-title">Thực phẩm dinh dưỡng</a>
                                    <ul class="mega-menu-lv-2">
                                        <li><a href="">Sữa Meiji</a></li>
                                        <li><a href="">Sữa Glico ICreo</a></li>
                                        <li><a href="">Sữa Morinaga</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class="block-right">
                                <?= HopeImageHelper::createTagImage('/images/category/menu-1.webp') ?>
                            </div>
                        </ul>
                    </li>
                    <li class="category-item"><a href="" class="category-item-title"><span>Sữa và thực phẩm</span> <i class="fa fa-angle-right"></i></a></li>
                    <li class="category-item"><a href="" class="category-item-title"><span>Bỉm tã và vệ sinh</span> <i class="fa fa-angle-right"></i></a></li>
                    <li class="category-item"><a href="" class="category-item-title"><span>Đồ sơ sinh</span> <i class="fa fa-angle-right"></i></a></li>
                    <li class="category-item"><a href="" class="category-item-title"><span>Đồ dùng ăn uống</span> <i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <div class="list-banner">
                <div class="banner-item">
                    <?= HopeImageHelper::createTagImage('/images/banner/banner1.webp') ?>
                </div>
                <div class="banner-item">
                    <?= HopeImageHelper::createTagImage('/images/banner/banner2.webp') ?>
                </div>
                <div class="banner-item">
                    <?= HopeImageHelper::createTagImage('/images/banner/banner3.webp') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="panel best-seller">
            <div class="panel-head">
                <div class="panel-title">
                    <h2 class="title text-uppercase">
                        <p>Sản phẩm bán chạy</p>
                    </h2>
                </div>
            </div>
            <div class="panel-content">
                <div class="list-product">
                    <?= HopeHtmlHelper::createProductTest(); ?>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-head">
                <div class="panel-title">
                    <h2 class="title text-uppercase">
                        <p>Sản phẩm nổi bật</p>
                    </h2>
                </div>
                <div class="see-more">
                    <a href="">Xem thêm >></a>
                </div>
            </div>
            <div class="panel-content">
                <div class="list-product">
                    <?= HopeHtmlHelper::createProductTest(); ?>
                </div>
                <div class="btn-see-all">
                    <button type="button" class="see-all">
                        <a href="">Xem tất cả</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="panel category">
            <div class="panel-head">
                <div class="panel-title">
                    <h2 class="title text-uppercase">
                        <p>Sữa tăng cân cho bé</p>
                    </h2>
                </div>
                <div class="see-more">
                    <a href="">Xem thêm >></a>
                </div>
            </div>
            <div class="panel-content">
                <div class="list-product">
                    <?= HopeHtmlHelper::createProductTest(); ?>
                </div>
                <div class="btn-see-all">
                    <button type="button" class="see-all">
                        <a href="">Xem tất cả</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="terms-policy">
    <div class="terms-policy-item">
        <?= HopeImageHelper::createTagImage('/icon/chinhhang.webp') ?>
        <span class="text-uppercase">100% Hàng Chính Hãng</span>
    </div>
    <div class="terms-policy-item">
        <?= HopeImageHelper::createTagImage('/icon/freeship.webp') ?>
        <span class="text-uppercase">Giao hàng siêu tốc</span>
    </div>
    <div class="terms-policy-item">
        <?= HopeImageHelper::createTagImage('/icon/changeproduct.webp') ?>
        <span class="text-uppercase">365 ngày đổi trả hàng</span>
    </div>
    <div class="terms-policy-item">
        <?= HopeImageHelper::createTagImage('/icon/tichluy.webp') ?>
        <span class="text-uppercase">Tích luỹ khi mua sản phẩm</span>
    </div>
</div>